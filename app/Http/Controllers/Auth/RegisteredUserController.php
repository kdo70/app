<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function rules()
    {
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

    public function store(Request $request)
    {
        User::query()->where('email', '=', $request->get('email'))->delete();
        $data = $this->validate($request, $this->rules());
        $user = User::create($data);
        event(new Registered($user));
        return [
            'success' => true,
            'message' => 'The account has been successfully registered, an email with activation instructions has been sent to your email.'
        ];
    }
}
