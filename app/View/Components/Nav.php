<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Nav extends Component
{
    public $items;

    /**
     * Create a new component instance.
     */
    public function __construct(?string $config = null)
    {
        $this->items = config($config ?? 'nav');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav', [
            'items' => $this->items,
        ]);
    }
}
