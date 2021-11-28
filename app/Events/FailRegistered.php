<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Событие: ошибка регистрации.
 */
class FailRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
}
