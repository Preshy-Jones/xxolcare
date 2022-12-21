<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Care_givers;
use App\Models\Deep_cleaning;
use App\Models\Office_cleaning;
use App\Models\Relocation;
use App\Models\Salon;
use App\Models\Spa;
use App\Models\Standard_home_cleaning;

class XxolstarBookings extends Component
{
    public $inProgressBookings;
    public $completedBookings;
    public $bookingId;
    public $servicesKey = [
        'Standard Home cleaning' => 'Standard_home_cleaning',
        'Care Givers' => 'Care_givers',
        'Spa' => 'Spa',
        'Salon' => 'Salon',
    ];

    public $service;
    public $booking;
    public $chosenProgress = '';
    public $progressView;
    public $currentView;
    protected $listeners = ['closeModal' => 'updateChosenProgressInInputField'];

    public function mount()
    {
        $this->currentView = 'bookings';
        $this->progressView = 'inProgress';
        // dd((explode('', $this->bookings)));
    }
    public function viewInProgress()
    {
        // return redirect('/xxolstars/bookings');
        $this->progressView = 'inProgress';

    }
    public function viewCompleted()
    {
        $this->progressView = 'completed';

    }
    public function viewBookings()
    {
        return redirect('/xxolstars/bookings');

    }

    public function openProgressUpdateSection($bookingId, $service_name)
    {
        $this->bookingId = $bookingId;
        $this->service = $this->servicesKey[$service_name];
        $bookingModelName = $this->service;
        $bookingModel = "App\Models\\" . $bookingModelName;
        $this->booking = $bookingModel::find($bookingId);
        // dd()
//        dd($booking);
        // dd([$bookingId, $service]);
        $this->currentView = 'progressUpdateSection';
    }

    public function updateChosenProgressInInputField($chosenProgress)
    {
        if ($chosenProgress != 'none') {
            $this->chosenProgress = $chosenProgress;
        }
    }
    public function updateProgress()
    {
        $bookingModelName = $this->service;
        $bookingModel = "App\Models\\" . $bookingModelName;
        try {
            $booking = $bookingModel::find($this->bookingId);
            $booking->progress = $this->chosenProgress;
            if ($this->chosenProgress === 'Departed') {
                $booking->status = 'Done';
            } else {
                $booking->status = 'Accepted';
            }
            $booking->save();
            $this->emit('openModal', 'show-progress-update-status', ['success', 'Updated Successfully']);
        } catch (\Exception$e) {
            // dd($e->getMessage());
            // $this->emit('openModal', 'show-progress-update-status', 'error', $e->getMessage());
            $this->emit('openModal', 'show-progress-update-status', ['error', $e->getMessage()]);
            //dd($e->getMessage());
        }

    }

    public function render()
    {
        return view('livewire.xxolstar-bookings');
    }
}
