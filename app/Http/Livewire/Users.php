<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    public function loadUsers()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {
        // sleep(2);
        // $users = [];
        // $users = $readToLoad?User::where('name', 'like', '%'.$this->search.'%')->paginate(10):[]; yo tarikale gare ni vayo
        $users = User::where('name', 'like', '%'.$this->search.'%')->paginate(10); 
        return view('livewire.users',['users'=>$this->readyToLoad?$users:[]]);
    }
}
