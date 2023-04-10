<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Auth;

class Login extends Component
{
    // use AuthenticatesUsers;
    // public $redirectTo = RouteServiceProvider::HOME;
    public $email;
    public $password;
    public $remember = false;
    protected $rules = [
        'email' => 'required|email|exists:users,email',
        'password' => 'required|min:6'
    ];
    // create a login funci=tion using Auth::attempt
    public function login()
    {
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Logged in successfully');
            return redirect()->route('home');
        } else {
            throw ValidationException::withMessages([
                'password' => [trans('auth.failed')],
            ]);
            // session()->flash('message', 'Invalid credentials');
            // return redirect()->route('login')->with(['email'=>$this->email]);
        }
    }
    public function render()
    {
        return view('auth.login')->layout('layouts.app', ['title' => 'Login']);
    }
}
