<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class TestDb extends Component
{
    public $contacts;
    protected $listeners = ['foo' => '$refresh'];
    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.test-db');
    }
    public function removeContact($name)
    {
        // $this->contacts->whereName($name)->delete();
        Contact::whereName($name)->delete();
        $this->contacts = Contact::all();
    }
    public function refreshChildren()
    {
    $this->emit('refreshChildren', 'foo'); 
    // this refresh the parent as well, we can trigger event like javascript 
    // to refresh just the child component
    // this foo can be accessed by the actual parameter in the child component
    }
}
