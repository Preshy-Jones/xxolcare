<?php

namespace App\Http\Livewire\Modals;

use LivewireUI\Modal\ModalComponent;

class FinanceSuccessfullyAdded extends ModalComponent
{

    public $status;
    public $message;

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function done()
    {
        $this->forceClose()->closeModal();
        return redirect('admin/finances');
    }

    public function mount($status, $message)
    {
        $this->status = $status;
        $this->message = $message;
    }

    public function render()
    {
        return view('livewire.modals.finance-successfully-added');
    }
}
