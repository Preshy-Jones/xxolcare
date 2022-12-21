<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BookingCompleteModal extends ModalComponent
{

    public $message;

    public function mount($message){
        $this->message = $message;
    }

    public function render()
    {
        return view('livewire.booking-complete-modal');
    }
}
