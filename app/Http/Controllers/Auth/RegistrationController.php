<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\View\Components\WarningModal;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function store(RegistrationRequest $request)
    {
        try {
            $user = User::create($request->validated());
            event(new Registered($user));
            $message = 'auth.success';
        } catch (Exception $e) {
            $message = 'auth.fail';
        }
        $view = app(
            WarningModal::class,
            ['messages' => __($message)]
        )->render();
        return ['modal' => $view->render()];
    }
}
