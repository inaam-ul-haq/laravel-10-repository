<?php

namespace App\View\Components\Auth;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputButton extends Component
{
    public $btnClass = null;
    public $btnType = null;
    public $btnValue = null;
    public $extra = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($btnClass = null, $btnType, $btnValue, $extra = null)
    {
        $this->btnClass = $btnClass;
        $this->btnType = $btnType;
        $this->btnValue = $btnValue;
        $this->extra = $extra;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth.input-button');
    }
}
