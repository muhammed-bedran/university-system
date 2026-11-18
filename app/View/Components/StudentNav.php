<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StudentNav extends Component
{
    public $items;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->items = config('student_nav');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student-nav', [
            'items' => $this->items
        ]);
    }
}
