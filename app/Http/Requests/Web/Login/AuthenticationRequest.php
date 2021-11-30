<?php

namespace App\Http\Requests\Web\Login;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

/**
 * Web: запрос аутентификации пользователя.
 */
class AuthenticationRequest extends FormRequest
{
    /**
     * Проверка доступа.
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Правила валидации запроса.
     * @return array
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'alpha_dash', 'max:255', 'min:5', 'exists:users'],
            'password' => ['required', Password::defaults()],
        ];
    }

    /**
     * Аутентификация пользователя.
     * @return void
     * @throws ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();
        $this->isVerified();

        if (!Auth::attempt($this->only('username', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages(['username' => __('auth.failed')]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Проверить, верифицирована ли учетная запись.
     * @return void
     * @throws ValidationException
     */
    public function isVerified()
    {
        $isVerified = User::query()->where('username', '=', $this->only('username'))
            ->whereNotNull('email_verified_at')->exists();

        if (!$isVerified) {
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages(['username' => __('auth.verify')]);
        }
    }

    /**
     * Проверка ограничения неудачных попыток.
     * @return void
     * @throws ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());
        throw ValidationException::withMessages([
            'username' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60)
            ])
        ]);
    }

    /**
     * Идентификатор ограничения попыток.
     * @return string
     */
    public function throttleKey(): string
    {
        return Str::lower($this->input('username')) . '|' . $this->ip();
    }

    /**
     * Выполнить аутентификацию пользователя.
     * @throws ValidationException
     */
    public function fulfill()
    {
        $this->authenticate();
        $this->session()->regenerate();
    }
}
