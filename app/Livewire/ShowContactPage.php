<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class ShowContactPage extends Component
{   
    public $name = '';
    public $email = '';
    public $message = '';
    
    protected $rules = [
        'name' => 'Required',
        'email' => 'required|email'
    ];

    public function submit(){
        $this->validate();

        $mailData = [
            'subject' => 'You have received a contact email',
            'name' =>$this->name,
            'email' => $this->email,
            'message' => $this->message
        ];

        Mail::to('imdharmendeverma@gmail.com')->send(new ContactEmail($mailData));

        session()->flash('success', 'Thanks for contacting us, will connect you soon!');

        $this->redirect('/contact');
    }

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
