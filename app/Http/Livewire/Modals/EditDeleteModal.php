<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Xxolstar;
use App\Models\User;

class EditDeleteModal extends ModalComponent
{
    public $xxolstar;
    public $client;
    public $active;
    public $type;

    public function mount($id, $type)
    {
        $this->type = $type;
        if ($type === 'client') {
            $this->client = User::find($id);
        }
        if ($type === 'xxolstar') {
            $this->xxolstar = Xxolstar::find($id);
        }

    }

    public function viewEditProfile($xxolstar)
    {
        // dd($xxolstar);
        if ($this->active === 'edit') {
            $this->emit('closeModal', $xxolstar, 'edit');
            // dd($this->date_of_birth);

            $this->currentView = 'editProfile';
            $this->clickedOption = '';
        }

        $this->active = 'edit';

    }

    public function deleteXxolstar($xxolstarId)
    {
        if ($this->active === 'delete') {
            $this->emit('closeModal', $xxolstarId, 'delete');

        }
        $this->active = 'delete';
    }
    public function render()
    {
        return view('livewire.modals.edit-delete-modal');
    }
}
