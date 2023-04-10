<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Http\Request;

class ProductList extends Component
{
    public $products = ['products', 'mobile', 'landline']; //fetch value from view 
    public $loud = false;
    public $greetings = ['hello'];
    // public function resetProduct($name = 'Ganesh')
    // {
    //     $this->products = $name;
    // }
    // hooks
    // public function mount(Request $req, $products = 'Ganesh Adhikari') 
    //{constructor, 1st method to run
        // $this->products = $req->input('products', $products);
    // }
    public function hydrate() // before render
    {
        $this->products = 'Hydrated@';
    }
    // updating hook, updated hook
    public function updated() // after some some property  updated
    {
        $this->products = 'Updated@';
    }
    public function updatedLoud() { //after loud property updated
        $this->products = 'Updated Loud@';
    }
    public function render()
    {
        return view('livewire.product-list');
    }


}
