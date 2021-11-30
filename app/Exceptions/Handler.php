<?php

namespace App\Exceptions;

use App\View\Components\InformationModal;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    protected $dontReport = [];

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register()
    {
        $this->renderable(function (Exception $exception, $request) {
            $messages = static::getMessages($exception);
            $status = $this->getStatus($exception);

            $view = app(InformationModal::class, [
                'messages' => $messages
            ])->render();

            $data = [
                'html' => $view->render(),
                'text' => $messages,
                'message' => is_string($messages)
            ];

            if ($request->ajax()) {
                return response()->json($data, $status);
            }

            return response()->view('errors.show', $data, $status);
        });
    }

    protected function getMessages($exception)
    {
        if (method_exists($exception, 'errors')) {
            return $exception->errors();
        }
        return $exception->getMessage();
    }

    protected function getStatus($exception): int
    {
        if (method_exists($exception, 'getStatusCode')) {
            return $exception->getStatusCode();
        } elseif (!empty($exception->status)) {
            return $exception->status;
        }
        return 500;
    }
}
