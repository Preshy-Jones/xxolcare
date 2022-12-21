<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DropDownModal extends Component
{
    public $modal;

    public $modalStatus;

    public $options = [
        'frequency' => ['One-time Service', 'WeeklyService', 'Monthly Service'],
        'bedroom' => ['1', '2', '3', '4', '5'],
    ];

    public function testing()
    {
        dd($this->modalStatus);
    }

    public function render()
    {
        return view('livewire.drop-down-modal');
    }
}
