<?php

namespace App\Http\Requests\Web\Login;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Web: запрос верификации пользователя.
 */
class VerificationRequest extends FormRequest
{
    /**
     * Проверка доступа.
     * @return bool
     */
    public function authorize(): bool
    {
        if (!$this->user()) {
            return false;
        }

        if (!hash_equals((string)$this->route('id'), (string)$this->user()->getKey())) {
            return false;
        }

        if (!hash_equals((string)$this->route('hash'), sha1($this->user()->getEmailForVerification()))) {
            return false;
        }

        return true;
    }

    /**
     * Правила валидации запроса.
     * @return array
     */
    public function rules(): array
    {
        return [];
    }

    /**
     * Получить модель пользователя.
     * @param null $guard Guard.
     * @return Builder|Model|object|null
     */
    public function user($guard = null)
    {
        return User::query()->whereNull('email_verified_at')
            ->where('id', '=', $this->route('id'))
            ->first();
    }

    /**
     * Верифицировать пользователя.
     * @return void
     */
    public function fulfill($user)
    {
        $this->user()->markEmailAsVerified();
        event(new Verified($user));
        Auth::login($user);
    }
}
