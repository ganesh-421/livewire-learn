<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewComponent extends Component
{
    use WithFileUploads; //trait for file upload
    public $student = ['fname' => '', 'lname' => ''];
    public $image;
    public $images;
    public $fullname;
    public $message;
    protected $listeners = ['concatenated' => 'fullnameMade'];
    protected $rules = [
        'student.fname' => 'required|min:3',
        'student.lname' => 'required|min:3',
        // 'image' => 'image',
        // 'images.*' => 'image|required'
    ];
    // protected $messages = [
    //     'student.fname.required' => 'First name is required',
    //     'student.lname.required' => 'Last name is required',
    // ]; // custom error message
    public function makeFullname()
    {
        $this->validate();
        sleep(2);
        // foreach ($this->images as $photo) {
        //     $photo->store('photos');
        // }
        // $this->image->store('photos');
        $this->fullname = $this->student['fname'] . ' ' . $this->student['lname'];
        // $this->emitTo('home', 'concatenated'); // emit event to just home component
        $this->emit('concatenated'); // emit event
        // session()->flash('message', 'Concatnated succesfully'); flash message 
        // return redirect()->to('/home'); redirect to another full page component
    }
    // hook for image
    public function updatedImage()
    {
        $this->validate([
            'image' => 'image'
        ]);
    }
    public function downloadImage()
    {
        // return Storage::disk('local')->download('photos/test.jpg');
        // return Storage::download('photos/test.jpg');
        return response()->streamDownload(function () {
            echo ("jpg contents are downloading");
        }, 'test.txt');
    }
    public function fullnameMade()
    {

        if ($this->fullname == 'Ganesh Adhikari') {
            $this->message = "You are the best";
        } else {
            $this->message = "Full name has ben prepared and sent to you";
        }
    }
    public function render()
    {
        return view('livewire.new-component');
    }
}
