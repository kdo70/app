<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 *
 */
class InformationModal extends Component
{
    /**
     * @var array
     */
    protected $messages;

    /**
     * @param $messages
     */
    public function __construct($messages)
    {
        $this->messages = (array)$messages;
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.information-modal', ['messages' => $this->messages]);
    }
}
