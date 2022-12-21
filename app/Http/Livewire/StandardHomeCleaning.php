<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StandardHomeCleaning extends Component
{
    public $service;
    public $overlayStatus = "";

    public $modalStatus = [
        'frequency' => 'hidden',
        'bedroom' => 'hidden',
    ];

    public function showModal($option)
    {
//        dd($this->modalStatus);
        $this->overlayStatus = 'overlay';
        $this->modalStatus[$option] = "";
    }

    public function render()
    {
        return view('livewire.standard-home-cleaning');
    }
}
