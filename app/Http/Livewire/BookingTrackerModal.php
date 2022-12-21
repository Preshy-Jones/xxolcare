<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BookingTrackerModal extends ModalComponent
{
    public $chosenProgress;
    public $testVariable = 'sasuke';
    public $progressOptions = ['Yet to move', 'On the way', 'Arrived', 'Working', 'Done', 'Departed'];

    public function selectProgress($chosenProgress)
    {
        $this->chosenProgress = $chosenProgress;
    }
    public function render()
    {
        return view('livewire.booking-tracker-modal');
    }
}
