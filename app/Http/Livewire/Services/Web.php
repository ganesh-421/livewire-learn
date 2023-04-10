<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class Web extends Component
{
    public $webMessage;
    protected $listeners = ['concatenated'=>'madeFromWeb'];
    public function render()
    {
        return view('livewire.services.web');
    }
    public function madeFromWeb()
    {
       $this->webMessage="I am coming from Web component";
    }
}
