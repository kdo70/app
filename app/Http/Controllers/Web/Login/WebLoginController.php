<?php

namespace App\Http\Controllers\Web\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Login\AuthenticationRequest;
use App\Http\Requests\Web\Login\NotificationRequest;
use App\Http\Requests\Web\Login\RegistrationRequest;
use App\Http\Requests\Web\Login\VerificationRequest;
use App\View\Components\InformationModal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

/**
 * Web: контроллер аутентификации.
 */
class WebLoginController extends Controller
{
    /**
     * Показать страницу аутентификации
     * @return Application|Factory|View
     */
    public function show()
    {
        return view('app.views.login.index');
    }

    /**
     * Зарегистрировать учетную запись
     * @param RegistrationRequest $request
     * @return JsonResponse
     */
    public function registration(RegistrationRequest $request): JsonResponse
    {
        $request->fulfill();

        $response = app(InformationModal::class, [
            'messages' => __('auth.success')
        ])->render();

        return response()->json([
            'html' => $response->render(),
            'text' => __('auth.success')
        ]);
    }

    /**
     * Верифицировать учетную запись
     * @param VerificationRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function verification(VerificationRequest $request)
    {
        $request->fulfill($request->user());

        return redirect(route('web.manage'));
    }

    /**
     * Повторно, отправить инструкцию верификации учетной записи
     * @param NotificationRequest $request Request.
     * @return JsonResponse
     */
    public function notification(NotificationRequest $request): JsonResponse
    {
        $request->fulfill();

        $response = app(InformationModal::class, [
            'messages' => __('auth.notification')
        ])->render();

        return response()->json([
            'html' => $response->render(),
            'text' => __('auth.notification')
        ]);
    }

    /**
     * Аутентификация учетной записи
     * @param AuthenticationRequest $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function authentication(AuthenticationRequest $request): JsonResponse
    {
        $request->fulfill();

        return response()->json([
            'uri' => route('web.manage')
        ]);
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
