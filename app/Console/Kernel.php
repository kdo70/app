<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * Базовый класс конфигурации консоли приложения.
 */
class Kernel extends ConsoleKernel
{
    /**
     * Регистрация команд приложения.
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');
        require base_path('routes/console.php');
    }
}
