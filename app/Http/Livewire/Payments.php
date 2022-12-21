<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Payments extends Component
{
    public $query;
    public $service;
    public $showConfirmButton = true;
    public static function verifyTransaction($reference)
    {
        $url = "https://api.paystack.co/transaction/verify/$reference";
        // return $url;
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
            'Content-Type' => 'application/json',
        ])->get($url)->json();
        // return $data;
        if ($data['status'] == true) {
            return $data;
        } else {
            return $data;
        }
    }

    public function mount()
    {

    }

    public function verify()
    {
        $this->showConfirmButton = false;
        $reference = $this->query['reference'];
        //return $reference;
        $data = self::verifyTransaction($reference);
        if ($data['data']['gateway_response'] == 'Successful') {
            $bookingId = session('booking')['id'];
            $bookingModel = session('bookingModel');
            // dd($bookingModel);
            $booking = $bookingModel::find($bookingId);
            $booking->user_id = auth()->user()->id;
            $booking->user_name = auth()->user()->name;
            $booking->save();
            // $booking->userid = auth()->user()->id;
            session()->flash('success', 'Payment Confirmed');

        } else if ($data['data']['gateway_response'] == 'Insufficient Funds') {
            session()->flash('insufficient', 'Insufficient Funds');
        } else if ($data['status'] == false) {
            session()->flash('fail', $data['message']);
        }
    }

    public function proceed()
    {
        $serviceDir = $this->service;
        return redirect("/bookings/selectxxol/$serviceDir");
    }

    public function render()
    {
        return view('livewire.payments');
    }
}
