<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // public $name='';
    // public $id=''; livewire is used so they are not required
    public function __construct(/*$name, $id*/)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs');
    }
}
