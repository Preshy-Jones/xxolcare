<?php

namespace App\Http\Livewire;

use Livewire\Component;

class XxolstarBookingSummary extends Component
{
    protected $listeners = ['viewBookingSummary'];
    public $bookingSummaryVisibility = 'hidden';

    public function viewBookingSummary()
    {
        $this->bookingSummaryVisibility = '';
    }

    public function render()
    {
        return view('livewire.xxolstar-booking-summary');
    }
}
