<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

/**
 * Событие: ошибка регистрации
 */
class FailRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
}
