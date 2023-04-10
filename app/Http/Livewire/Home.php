<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    private $title = "HOME PAGE";
    // public $message;
    // public $name;
    // public $num1;
    // public $num2;
    // public $sum;
    // protected $listeners = ['add' => 'addTwo']; //madeFromHome
    // public function mount($name = 'default')
    // {
    //     $this->name = $name;
    // }
    // public function madeFromHome()
    // {
    //     $this->message = "I am coming from Home component";
    // }
    // public function addTwo()
    // {
    //     $this->sum = $this->num1 + $this->num2;
    // }
    // public function updatedNum1()
    // {
    //     $this->emit('num1Changed');
    // }
    // public function updatedNum2()
    // {
    //     $this->emit('num2Changed');
    // }
    // public function updatedSum()
    // {
    //     $this->emit('sumChanged');
    // }
    public function render()
    {
        return view('home')->layout('layouts.app', ['title' => $this->title]); //no you can access {{ $title }} in app.blade.php inside layout
        // return view('livewire.home')->extends('layouts.app', ['title' => $this->title])->section('main'); if you want to use yield('main')
    }
}
