<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255', 'min:5', 'unique:users'],
            'username' => ['required', 'string', 'alpha_dash', 'max:255', 'min:5', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'name' => ['required', 'string'],
            'birthday' => ['required', 'date'],
            'experience' => ['required', 'string'],
            'professionId' => ['required', 'string'],
            'townId' => ['required', 'string'],
            'locationId' => ['required', 'string'],
            'styleId' => ['required', 'string'],
            'pkId' => ['required', 'string'],
            'olympiadId' => ['required', 'string'],
            'commandId' => ['required', 'string'],
        ];
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rules());
        $user = User::create($data);
        event(new Registered($user));
        return ['success' => true];
    }
}
