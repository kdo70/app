<?php

namespace App\Http\Controllers\Web\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Login\AuthenticationRequest;
use App\Http\Requests\Web\Login\NotificationRequest;
use App\Http\Requests\Web\Login\RegistrationRequest;
use App\Http\Requests\Web\Login\VerificationRequest;
use App\View\Components\WarningModal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
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
     * Зарегистрировать пользователя.
     * @param RegistrationRequest $request Request.
     * @return array
     */
    public function registration(RegistrationRequest $request): array
    {
        $request->fulfill();

        $response = app(WarningModal::class, [
            'messages' => __('auth.success')
        ])->render();

        return ['modal' => $response->render()];
    }

    /**
     * Произвести верификацию email.
     * @param VerificationRequest $request Request.
     * @return Application|RedirectResponse|Redirector
     */
    public function verification(VerificationRequest $request)
    {
        $request->fulfill($request->user());

        return redirect(route('web.manage'));
    }

    /**
     * Повторно, отправить инструкцию по активации аккаунта пользователю.
     * @param NotificationRequest $request Request.
     * @return array
     */
    public function notification(NotificationRequest $request): array
    {
        $request->fulfill();

        $response = app(WarningModal::class, [
            'messages' => __('auth.notification')
        ])->render();

        return ['modal' => $response->render()];
    }

    /**
     * Авторизовать пользователя.
     * @param AuthenticationRequest $request Request.
     * @return array
     * @throws ValidationException
     */
    public function authentication(AuthenticationRequest $request): array
    {
        $request->fulfill();

        return ['uri' => route('web.manage')];
    }

    /**
     * Разорвать сессию пользователя.
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('web.manage'));
    }
}
