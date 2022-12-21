<?php

namespace App\Http\Livewire\Modals;

use LivewireUI\Modal\ModalComponent;
use App\Models\Finance;
use App\Models\admin;

class FinanceForm extends ModalComponent
{

    public $title;
    public $amount;
    public $summary;
    public $contact;
    public $type;

    public function save()
    {

        $this->validate([
            'title' => 'required',
            'amount' => 'required|numeric',
            'summary' => 'required',
            'type' => 'required',
            'contact' => 'required',
        ]);

        try {
            $finance = new Finance;
            $finance->title = $this->title;
            $finance->amount = $this->amount;
            $finance->summary = $this->summary;
            $finance->contact = $this->contact;
            $finance->type = $this->type;
            $adminId = session('LoggedAdmin');
            $admin = admin::find($adminId);
            $finance->assigned = $admin['name'];
            $finance->save();
            $this->emit('openModal', 'modals.finance-successfully-added', ['success', 'Added Successfully']);
        } catch (\Exception$e) {
            $this->emit('openModal', 'modals.finance-successfully-added', ['error', $e->getMessage()]);
        }

//        dd([$this->title, $this->amount, $this->summary, $this->contact, $this->type]);
    }

    public function render()
    {

        return view('livewire.modals.finance-form');
    }
}
