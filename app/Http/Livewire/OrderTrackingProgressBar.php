<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderTrackingProgressBar extends Component
{
    public $bookingProgress;

    public function render()
    {
        return view('livewire.order-tracking-progress-bar');
    }
}
