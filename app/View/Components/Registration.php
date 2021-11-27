<?php

namespace App\View\Components;

use App\Models\form\FormCommand;
use App\Models\form\FormExperience;
use App\Models\form\FormLocation;
use App\Models\form\FormOlympiad;
use App\Models\form\FormPk;
use App\Models\form\FormProfession;
use App\Models\form\FormStyle;
use App\Models\form\FormTown;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Registration extends Component
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.registration', [
            'experiences' => $this->getDataModel(FormExperience::class),
            'professions' => $this->getDataModel(FormProfession::class),
            'towns' => $this->getDataModel(FormTown::class),
            'locations' => $this->getDataModel(FormLocation::class),
            'styles' => $this->getDataModel(FormStyle::class),
            'pks' => $this->getDataModel(FormPk::class),
            'olympiads' => $this->getDataModel(FormOlympiad::class),
            'commands' => $this->getDataModel(FormCommand::class),
        ]);
    }

    public function getDataModel($model)
    {
        return $model::query()->where('visible', '=', true)->orderBy('sort')->get();
    }
}
