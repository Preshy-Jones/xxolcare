<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ProfileUpdateStatusModal extends ModalComponent
{
    public $status;
    public $message;

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function mount($status, $message)
    {
        $this->status = $status;
        $this->message = $message;
    }

    public function render()
    {
        return view('livewire.profile-update-status-modal');
    }
}
