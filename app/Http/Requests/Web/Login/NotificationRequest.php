<?php

namespace App\Http\Requests\Web\Login;

use App\Models\User;
use App\View\Components\WarningModal;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

/**
 * Web: запрос инструкции верификации учетной записи.
 */
class NotificationRequest extends FormRequest
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

        if ($this->user()->hasVerifiedEmail()) {
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
        return [
            'email' => ['required', 'string', 'email:rfc,dns', 'min:5', 'max:255', 'exists:users'],
        ];
    }

    /**
     * Обработчик ошибок валидации.
     * @param Validator $validator
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $view = app(WarningModal::class, [
            'messages' => $validator->errors()->toArray()
        ])->render();
        $response = new JsonResponse(['modal' => $view->render()], 422);

        throw new ValidationException($validator, $response);
    }

    /**
     * Получить модель пользователя.
     * @param null $guard Guard.
     * @return Builder|Model|object|null
     */
    public function user($guard = null)
    {
        return User::query()->whereNull('email_verified_at')
            ->where('email', '=', $this->get('email'))
            ->first();
    }

    /**
     * Отправить инструкцию по активации аккаунта пользователю.
     * @return void
     */
    public function fulfill()
    {
        $this->user()->sendEmailVerificationNotification();
    }

}
