<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function mount()
    {
        Auth::logout();
        session()->flash('message', 'Logged out successfully');
        return redirect()->route('login');
    }
    
    // public function render()
    // {
    //     Auth::logout();
    //     $this->logout(); 
    //     session()->flash('message', 'Logged out successfully');
    //     return view('auth.login')->layout('layouts.app', ['title' => 'Login']);
    //     // return redirect()->route('login');
    // }
}
