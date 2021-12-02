<?php

namespace App\Exceptions;

use App\View\Components\InformationModal;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

/**
 *
 */
class Handler extends ExceptionHandler
{
    /**
     * @var string[]
     */
    protected $dontReport = [];

    /**
     * @var string[]
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     *
     */
    public function register()
    {
        $this->renderable(function (Exception $exception, $request) {
            $messages = static::getMessages($exception);
            $status = static::getStatus($exception);
            $redirect = static::getRedirectTo($exception);

            $view = app(InformationModal::class, ['messages' => $messages])->render();

            $data = [
                'html' => $view->render(),
                'text' => $messages,
                'message' => is_string($messages),
                'link' => route('web.index')
            ];

            if ($request->ajax()) {
                return response()->json($data, $status);
            } elseif ($redirect) {
                return response()->redirectTo($redirect);
            }
            return response()->view('app.views.errors.show', $data, $status);
        });
    }

    /**
     * @param $exception
     * @return mixed
     */
    protected function getMessages($exception)
    {
        if (method_exists($exception, 'errors')) {
            return $exception->errors();
        }
        return $exception->getMessage();
    }

    /**
     * @param $exception
     * @return int
     */
    protected function getStatus($exception): int
    {
        if (method_exists($exception, 'getStatusCode')) {
            return $exception->getStatusCode();
        } elseif (!empty($exception->status)) {
            return $exception->status;
        }
        return 500;
    }

    /**
     * @param $exception
     * @return false|string
     */
    public function getRedirectTo($exception)
    {
        if (!method_exists($exception, 'redirectTo')) {
            return false;
        } elseif (!empty($exception->redirectTo)) {
            return $exception->redirectTo;
        }
        return $exception->redirectTo();
    }
}
