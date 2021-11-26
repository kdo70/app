<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WarningModal extends Component
{
    protected $messages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($messages)
    {
        $this->messages = (array)$messages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.warning-modal', ['messages' => $this->messages]);
    }
}
