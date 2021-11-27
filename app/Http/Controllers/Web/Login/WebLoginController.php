<?php

namespace App\Http\Controllers\Web\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Login\AuthenticationRequest;
use App\Http\Requests\Web\Login\EmailVerificationRequest;
use App\Http\Requests\Web\Login\RegisterRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

/**
 * Web контроллер аутентификации пользователя.
 */
class WebLoginController extends Controller
{
    /**
     * Показать страницу логина.
     * @return Application|Factory|View
     */
    public function show()
    {
        return view('app.views.login.index');
    }

    /**
     * Произвести верификацию email.
     * @param EmailVerificationRequest $request Запрос.
     * @return Application|RedirectResponse|Redirector
     */
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('/home');
    }

    /**
     * Зарегистрировать пользователя.
     * @param RegisterRequest $request Запрос.
     * @return array
     * @throws ValidationException
     */
    public function register(RegisterRequest $request): array
    {
        return ['modal' => $request->register()->render()];
    }

    /**
     * Авторизовать пользователя.
     * @param AuthenticationRequest $request Запрос.
     * @return array
     * @throws ValidationException
     */
    public function authentication(AuthenticationRequest $request): array
    {
        $request->authenticate();
        $request->session()->regenerate();
        return ['uri' => route('web.manage')];
    }
}
