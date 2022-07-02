<?php

namespace App\View\Components;

use App\Models\Event;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Events extends Component
{
    protected $slug;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug = null)
    {
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        if ($this->slug) {
            $event = Event::query()->with([
                'comments.user.comments',
                'comments.user.ratings',
                'ratings',
                'comments.ratings',
            ])->where('slug', '=', $this->slug)->first();

            return view('components.event', [
                'event' => $event
            ]);
        } else {
            $paginator = Event::query()->with([
                'comments',
                'user',
                'ratings',
            ])->orderBy('created_at', 'desc')->paginate(10);

            return view('components.events', [
                'paginator' => $paginator
            ]);
        }
    }
}
