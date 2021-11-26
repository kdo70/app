<?php

namespace App\Http\Requests;

use App\Models\User;
use App\View\Components\WarningModal;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class RegistrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        User::query()->delete();
        return [
            'email' => ['required', 'string', 'email:rfc,dns', 'min:5', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'alpha_dash', 'max:255', 'min:5', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'name' => ['nullable', 'string', 'alpha'],
            'birthday' => ['nullable', 'date'],
            'experience' => ['nullable', 'string', 'min:1', 'max:1'],
            'professionId' => ['nullable', 'string', 'min:1', 'max:2'],
            'townId' => ['nullable', 'string', 'min:1', 'max:2'],
            'locationId' => ['nullable', 'string', 'min:1', 'max:3'],
            'styleId' => ['nullable', 'string', 'min:1', 'max:1'],
            'pkId' => ['nullable', 'string', 'min:1', 'max:1'],
            'olympiadId' => ['nullable', 'string', 'min:1', 'max:1'],
            'commandId' => ['nullable', 'string', 'min:1', 'max:1'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $view = app(
            WarningModal::class,
            ['messages' => $validator->errors()->toArray()]
        )->render();

        $response = new JsonResponse([
            'modal' => $view->render(),
        ], 422);

        throw new ValidationException($validator, $response);
    }
}
