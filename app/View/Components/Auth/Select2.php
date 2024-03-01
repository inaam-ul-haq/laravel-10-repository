<?php

namespace App\View\Components\Auth;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select2 extends Component
{
    public $label = null;
    public $name = null;
    public $id = null;
    public $loopData = [];
    public $existingId = null;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $name, $id, $data = null, $existingId = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        $this->loopData = $data;
        $this->existingId = $existingId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth.select2');
    }
}
