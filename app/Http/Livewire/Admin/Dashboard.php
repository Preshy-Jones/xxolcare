<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin as Admin;

class Dashboard extends Component
{

    public $loggedAdminName;
    public $number_of_jobs;
    public $number_of_bookings;
    public $users;
    public $xxolstars;

    public function mount()
    {
        $this->loggedAdminName = Admin::find(session('LoggedAdmin'))['name'];
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
