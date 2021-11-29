<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

/**
 * Уведомление с инструкцией по верификации аккаунта.
 */
class VerificationNotification extends VerifyEmail
{
    /**
     * Получить ссылку для верификации.
     * @param mixed $notifiable Notifiable.
     * @return string
     */
    protected function verificationUrl($notifiable): string
    {
        if (static::$createUrlCallback) {
            return call_user_func(static::$createUrlCallback, $notifiable);
        }

        $expire = Config::get('auth.verification.expire', 60);
        $parameters = [
            'id' => $notifiable->getKey(),
            'hash' => sha1($notifiable->getEmailForVerification())
        ];

        return URL::temporarySignedRoute('web.login.verification',
            Carbon::now()->addMinutes($expire), $parameters);
    }
}
