<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class XxolstarModal extends ModalComponent
{

    public $firstName;
    public $lastName;
    public $biography;
    public $imageUrl;
    public $xxolstarId;

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }
    public function mount($firstName, $lastName, $biography, $imageUrl, $xxolstarId)
    {
        // Gate::authorize('update', $user);
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->biography = $biography;
        $this->imageUrl = $imageUrl;
        $this->xxolstarId = $xxolstarId;
    }

    public function render()
    {
        return view('livewire.xxolstar-modal');
    }
}
