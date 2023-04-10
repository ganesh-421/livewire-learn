<?php

namespace App\Http\Livewire;

// use Auth;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ];
    // create a register function 
    public function register()
    {
        $this->validate();
        // create a user
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
        // login the user
        Auth::login($user);
        // redirect to home page
        return redirect()->route('home');
    }
    public function render()
    {
        return view('auth.register')->layout('layouts.app', ['title' => 'register']);
    }
}
