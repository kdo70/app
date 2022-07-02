<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

/**
 * Компонент: "Пагинатор"
 */
class Pagination extends Component
{
    /**
     * Объект пагинатора
     * @var
     */
    protected $paginator;

    /**
     * Количество элементов навигации
     * @var int
     */
    protected $numberCount = 5;

    /**
     * Create a new component instance.
     * @return void
     */
    public function __construct($paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * Get the view / contents that represent the component.
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.pagination', [
            'paginator' => $this->paginator,
            'backPageUrl' => $this->backPageUrl(),
            'min' => $this->minPage(),
            'max' => $this->maxPage(),
        ]);
    }

    /**
     * Получить ссылку "Назад"
     * @return string
     */
    public function backPageUrl(): string
    {
        $backPage = $this->paginator->currentPage() - 1;
        if ($backPage <= 1) {
            return request()->route()->uri();
        }
        return $this->paginator->url($backPage);
    }

    /**
     * Получить минимальную страницу от текущей
     * @return int
     */
    public function minPage(): int
    {
        $page = $this->paginator->currentPage() + $this->numberCount;
        if ($page > $this->paginator->lastPage()) {
            $page = $this->paginator->lastPage() - $this->numberCount;
            return $page > 0 ? $page : 1;
        }
        return $this->paginator->currentPage();
    }

    /**
     * Получить максимальную страницу от текущей
     * @return int
     */
    public function maxPage(): int
    {
        $page = $this->paginator->currentPage() + $this->numberCount - 1;
        if ($page > $this->paginator->lastPage()) {
            return $this->paginator->lastPage();
        }
        return $page;
    }
}
