<?php

namespace App\View\Components\Auth;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HrefLink extends Component
{
    public $link = "#";
    public $value = null;
    public $class = null;

    /**
     * Create a new component instance.
     */
    public function __construct($linkClass = null, $linkHref = "#", $linkValue = null)
    {
        $this->link = $linkHref;
        $this->value = $linkValue;
        $this->class = $linkClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth.href-link');
    }
}
