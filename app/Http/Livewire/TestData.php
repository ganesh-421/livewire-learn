<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestData extends Component
{
    protected $listeners = ['foo'=>'$refresh', 'refreshChildren']; 
    public $contact;
    public function mount($contact)
    {
        $this->contact = $contact;
    }
    public function render()
    {
        return view('livewire.test-data');
    }
    public function refreshChildren()
    {
    }
    public function emitFoo()
    {
        // $this->emit('foo');
        $this->emitUp('foo'); // refresh self and parent component not siblings component
    }
}
