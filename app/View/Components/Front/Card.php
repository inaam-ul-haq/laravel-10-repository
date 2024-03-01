<?php

namespace App\View\Components\Front;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $cardHeader = null;

    /**
     * Create a new component instance.
     */
    public function __construct($cardHeader = null)
    {
        $this->cardHeader = $cardHeader;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.card');
    }
}
