<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Xxolstar;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Care_givers;
use App\Models\Deep_cleaning;
use App\Models\Office_cleaning;
use App\Models\User;
use App\Models\Relocation;
use App\Models\Salon;
use App\Models\Spa;
use App\Models\Standard_home_cleaning;
use App\Models\admin;

class Clients extends Component
{
    use WithPagination;

    public $sortField;
    public $sortDirection = 'asc';
    public $loggedAdminName;

    public $sortFieldBookings;
    public $sortDirectionBookings = 'asc';

    public $filters = [
        'search' => '',
        'specialization' => '',
        'location' => '',
    ];

    public $filtersBookings = [
        'service_provided' => '',
    ];
    // public $users;

    protected $listeners = ['sortFieldSelected' => 'sort', 'closeModal' => 'editDelete'];

    // public $completedBookings;
    public $currentView;
    public $clickedOption;
    public $user;
    public $name;
    public $email;
    public $servicesKey = [
        'Standard Home cleaning' => 'Standard_home_cleaning',
        'Care Givers' => 'Care_givers',
        'Spa' => 'Spa',
        'Salon' => 'Salon',
    ];

    public $servicesModelNameArray = [
        'Standard_home_cleaning', 'Care_givers', 'Spa', 'Salon', 'Deep_cleaning', 'Office_cleaning', 'Relocation',
    ];

    public function mount()
    {
        $this->loggedAdminName = admin::find(session('LoggedAdmin'))['name'];
        $this->currentView = 'usersList';
    }

    public function resetFilters()
    {
        $this->reset('filters');
        // $this->filters = [
        //     'specialization' => '',
        // ];

    }

    public function sort($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function updatingFilters()
    {
        $this->resetPage();
    }
    public function viewBookingHistory()
    {
        // dd($this->xxolstar);

        $this->currentView = 'bookingHistory';
    }

    public function editDelete($field, $operation)
    {
        if ($operation == 'delete') {
            $xxolstar = User::find($field);
            $xxolstar->delete();
        }
        if ($operation == 'edit') {
            $this->user = $field;
            $this->name = $field['name'];
            $this->email = $field['email'];
            // dd($this->date_of_birth);

            $this->currentView = 'editProfile';

        }
    }

    public function viewEditProfile($field)
    {
        // dd($user);
        if ($this->clickedOption === 'editProfile') {
            $this->user = $user;
            $this->name = $user['name'];
            $this->email = $user['email'];
            // dd($this->date_of_birth);

            $this->currentView = 'editProfile';
        }

        $this->clickedOption = 'editProfile';

    }

    public function edit()
    {

        if ($this->user['email'] == $this->email) {
            // dd('hello');
            $this->validate([
                'email' => 'required',
                'name' => 'required',
            ]);
        } else {
            // dd('hi');
            $this->validate([
                'email' => 'required|email|unique:users,email',
                'name' => 'required',
            ]);
        }

        //dd($uploadedFileUrl);
        try {
            $user = User::find($this->user['id']);
            $user->email = $this->email;
            $user->name = $this->name;
            $user->save();
            $this->emit('openModal', 'profile-update-status-modal', ['success', 'Profile Updated']);
        } catch (\Exception$e) {

            $this->emit('openModal', 'profile-update-status-modal', ['error', $e->getMessage()]);
            // dd($e->getMessage());
        }
        // return redirect('/dashboard');
    }

    public function deleteXxolstar($userId)
    {
        if ($this->clickedOption === 'deletexxolstar') {

            $this->clickedOption = '';
            $user = User::find($userId);
            $user->delete();

        }
        $this->clickedOption = 'deletexxolstar';
    }

    public function viewUserstarsList()
    {
        $this->currentView = 'usersList';
    }

    public function sortJobs($field)
    {
        if ($this->sortFieldBookings === $field) {
            $this->sortDirectionBookings = $this->sortDirectionBookings === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirectionBookings = 'asc';
        }

        $this->sortFieldBookings = $field;
    }

    public function render()
    {
        $bookingsCollection = collect([]);
        if ($this->user) {

            for ($i = 0; $i < count($this->servicesModelNameArray); $i++) {

                $bookings = User::find($this->user['id'])[$this->servicesModelNameArray[$i]];
                $bookingsCollection = $bookingsCollection->merge(json_decode($bookings, true));

            }
        }

        //dd($completedBookings->sortby('service_name'));
        return view('livewire.admin.clients', [
            'users' => User::query()
            // ->when($this->filters['specialization'], function ($query, $status) {
            //     $query->whereJsonContains('specialization', $status);
            // })
            // ->when($this->filters['location'], function ($query, $status) {
            //     $query->whereJsonContains('location', $status);
            // })
                ->when($this->filters['search'], function ($query, $status) {
                    $query->searchusers($status);
                })->paginate(10),
            'bookings' => $bookingsCollection,
            // ->when($this->sortField, function ($query, $status) {
            //     $query->orderBy($status, $this->sortDirection);
            // }),

            // 'jobs' => ($this->sortFieldBookings)
            // ? (($this->sortDirectionBookings === 'asc') ? $completedBookings->sortBy($this->sortFieldBookings) : $completedBookings->sortByDesc($this->sortFieldBookings))
            // : (($this->filtersBookings['service_provided']) ? $completedBookings->where('service_name', $this->filtersBookings['service_provided']) : $completedBookings),
        ]);
    }

}
