<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
class ConfirmationModal extends ModalComponent
{
    public $confirmedOption;
    public $confirmedStatus;

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function mount($confirmedOption, $confirmedStatus)
    {
        $this->confirmedOption = $confirmedOption;
        $this->confirmedStatus = $confirmedStatus;
    }

    public function render()
    {
        return view('livewire.confirmation-modal');
    }
}
