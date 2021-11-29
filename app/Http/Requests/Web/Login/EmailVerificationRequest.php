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
class EmailVerificationRequest extends FormRequest
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

        if (!hash_equals((string)$this->route('id'),
            (string)$this->user()->getKey())) {
            return false;
        }

        if (!hash_equals((string)$this->route('hash'),
            sha1($this->user()->getEmailForVerification()))) {
            return false;
        }

        return true;
    }

    /**
     * Правила валидации запроса.
     * @return array
     */
    public function rules()
    {
        return [
            'expires' => ['required', 'string', 'max:255', 'min:5'],
            'signature' => ['required', 'string', 'max:255', 'min:5'],
        ];
    }

    /**
     * Получить модель пользователя.
     * @param null $guard
     * @return Builder|false|Model|object|null
     */
    public function user($guard = null)
    {
        $id = $this->route('id');

        if (empty($id)) {
            return false;
        }

        return User::query()->where('id', '=', $id)->first();
    }

    /**
     * Верифицировать пользователя.
     * @return void
     */
    public function fulfill()
    {
        if (!$this->user()->hasVerifiedEmail()) {
            $this->user()->markEmailAsVerified();

            event(new Verified($this->user()));

            Auth::login($this->user());
        }
    }
}
