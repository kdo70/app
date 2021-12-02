<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
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
    protected $link;

    /**
     * @param $messages
     */
    public function __construct($messages, $link = null)
    {
        $this->messages = (array)$messages;
        $this->link = $link;
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.information-modal', [
            'messages' => $this->messages,
            'link' => $this->link
        ]);
    }
}
