<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Xxolstar;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Care_givers;
use App\Models\Deep_cleaning;
use App\Models\Office_cleaning;
use App\Models\Relocation;
use App\Models\Salon;
use App\Models\Spa;
use App\Models\Standard_home_cleaning;
use App\Models\admin as Admin;

class Xxolstars extends Component
{

    use WithPagination;
    use WithFileUploads;

//    public $search;
    public $sortField;
    public $sortDirection = 'asc';

    public $sortFieldJobs;
    public $sortDirectionJobs = 'asc';

    public $filters = [
        'search' => '',
        'specialization' => '',
        'location' => '',
    ];

    public $filtersJobs = [
        'service_provided' => '',
    ];
    // public $xxolstars;

    protected $listeners = ['sortFieldSelected' => 'sort', 'closeModal' => 'editDelete'];

    // public $completedBookings;
    public $currentView;
    public $openEditModal = false;
    public $clickedOption;
    public $viewedPhoto;
    public $photo;
    public $xxolstar;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $address;
    public $phone;
    public $state;
    public $country;
    public $date_of_birth;
    public $specialization;
    public $location;
    public $biography;
    public $servicesKey = [
        'Standard Home cleaning' => 'Standard_home_cleaning',
        'Care Givers' => 'Care_givers',
        'Normal/Swedish massage' => 'Spa',
        'Deep massage' => 'Spa',
        'Pre-natal massage' => 'Spa',
        'Trigger and Reflexology' => 'Spa',
        'Salon' => 'Salon',
    ];
    public $loggedAdminName;

    public function mount()
    {
        $this->loggedAdminName = Admin::find(session('LoggedAdmin'))['name'];
        $this->currentView = 'xxolstarsList';
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
    public function viewJobHistory()
    {
        // dd($this->xxolstar);

        $this->currentView = 'jobHistory';
    }

    public function editDelete($field, $operation)
    {
        if ($operation == 'delete') {
            $xxolstar = Xxolstar::find($field);
            $xxolstar->delete();
        }
        if ($operation == 'edit') {
            $this->xxolstar = $field;
            $this->viewedPhoto = $field['profile_photo'];
            $this->first_name = $field['first_name'];
            $this->last_name = $field['last_name'];
            $this->email = $field['email'];
            $this->password = $field['password'];
            $this->address = $field['address'];
            $this->phone = $field['phone'];
            $this->state = $field['state'];
            $this->country = $field['country'];
            $this->date_of_birth = $field['date_of_birth'];
            $this->specialization = $field['specialization'];
            $this->location = $field['location'];
            $this->biography = $field['biography'];
            // dd($this->date_of_birth);

            $this->currentView = 'editProfile';

        }
    }

    public function viewEditProfile($xxolstar)
    {
        dd($xxolstar);
        if ($this->clickedOption === 'editProfile') {
            $this->xxolstar = $xxolstar;
            $this->viewedPhoto = $xxolstar['profile_photo'];
            $this->first_name = $xxolstar['first_name'];
            $this->last_name = $xxolstar['last_name'];
            $this->email = $xxolstar['email'];
            $this->password = $xxolstar['password'];
            $this->address = $xxolstar['address'];
            $this->phone = $xxolstar['phone'];
            $this->state = $xxolstar['state'];
            $this->country = $xxolstar['country'];
            $this->date_of_birth = $xxolstar['date_of_birth'];
            $this->specialization = $xxolstar['specialization'];
            $this->location = $xxolstar['location'];
            $this->biography = $xxolstar['biography'];
            // dd($this->date_of_birth);

            $this->currentView = 'editProfile';
        }

        $this->clickedOption = 'editProfile';

    }

    public function deleteXxolstar($xxolstarId)
    {
        if ($this->clickedOption === 'deletexxolstar') {

            $this->clickedOption = '';
            $xxolstar = Xxolstar::find($xxolstarId);
            $xxolstar->delete();
            $this->clickedOption = '';
            $this->openEditModal = false;
            // $xxolstar->Spa->each->delete();
            // $xxolstar->Care_givers->each->delete();
            // $xxolstar->standard_home_cleaning->each->delete();
//            $xxolstar->each->delete();

        }
        $this->clickedOption = 'deletexxolstar';
    }

    public function edit()
    {

        if ($this->xxolstar['email'] === $this->email || !$this->photo) {
            $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'state' => 'required',
                'country' => 'required',
                'location' => 'required',
                'date_of_birth' => 'required',
                'specialization' => 'required',
                'biography' => 'required',
            ]);
        } else {
            $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:xxolstars',
                'photo' => 'required|mimes:jpeg,png,jpg,gif|image|max:1024', // 1MB Max
                'address' => 'required',
                'phone' => 'required',
                'state' => 'required',
                'country' => 'required',
                'location' => 'required',
                'date_of_birth' => 'required',
                'specialization' => 'required',
                'biography' => 'required',
            ]);
        }

        if ($this->photo) {
            $uploadedFileUrl = cloudinary()->upload($this->photo->getRealPath())->getSecurePath();
            $this->viewedPhoto = $uploadedFileUrl;
        }

        //dd($uploadedFileUrl);
        try {
            $xxolstar = Xxolstar::find($this->xxolstar['id']);
            $xxolstar->email = $this->email;
            $xxolstar->first_name = $this->first_name;
            $xxolstar->last_name = $this->last_name;
            $xxolstar->address = $this->address;
            $xxolstar->phone = $this->phone;
            $xxolstar->state = $this->state;
            $xxolstar->country = $this->country;
            $xxolstar->date_of_birth = $this->date_of_birth;
            $xxolstar->specialization = $this->specialization;
            $xxolstar->biography = $this->biography;
            if ($this->photo) {
                $xxolstar->profile_photo = $uploadedFileUrl;
            }
            $xxolstar->location = $this->location;
            $xxolstar->save();
            $this->emit('openModal', 'profile-update-status-modal', ['success', 'Profile Updated']);
        } catch (\Exception$e) {

            $this->emit('openModal', 'profile-update-status-modal', ['error', $e->getMessage()]);
            // dd($e->getMessage());
        }
        // return redirect('/dashboard');
    }

    public function viewXXOLstarsList()
    {
        $this->currentView = 'xxolstarslist';
    }

    public function sortJobs($field)
    {
        if ($this->sortFieldJobs === $field) {
            $this->sortDirectionJobs = $this->sortDirectionJobs === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirectionJobs = 'asc';
        }

        $this->sortFieldJobs = $field;
    }

    public function render()
    {
        $completedBookings = collect([]);
        if ($this->xxolstar) {
            for ($i = 0; $i < count($this->xxolstar['specialization']); $i++) {
                //$serviceBookings = XxolStar::find($xxolstarId)[$this->servicesKey[$specializations[$i]]];

                if ($this->servicesKey[$this->xxolstar['specialization'][$i]] === 'Spa') {
                    $completedServiceBookings = XxolStar::find($this->xxolstar['id'])[$this->servicesKey[$this->xxolstar['specialization'][$i]]]->where('status', 'Done')->where('service', $this->xxolstar['specialization'][$i])->where('progress', '=', 'Departed');
                } else {
                    $completedServiceBookings = XxolStar::find($this->xxolstar['id'])[$this->servicesKey[$this->xxolstar['specialization'][$i]]]->where('status', 'Done')->where('progress', '=', 'Departed');
                }

                //echo ($serviceBookings);
                //echo gettype($bookings);
                $completedBookings = $completedBookings->concat(json_decode($completedServiceBookings, true));
                //           $completedBookings = array_merge($completedBookings, json_decode($completedServiceBookings, true));
            }
        }

        //dd($completedBookings->sortby('service_name'));
        return view('livewire.admin.xxolstars', [
            'xxolstars' => Xxolstar::query()
                ->when($this->filters['specialization'], function ($query, $status) {
                    $query->whereJsonContains('specialization', $status);
                })
                ->when($this->filters['location'], function ($query, $status) {
                    $query->whereJsonContains('location', $status);
                })
                ->when($this->filters['search'], function ($query, $status) {
                    $query->searchxxolstars($status);
                })

                ->when($this->sortField, function ($query, $status) {
                    $query->orderBy($status, $this->sortDirection);
                })
                ->paginate(10),
            'jobs' => $completedBookings,
            // 'jobs' => ($this->sortFieldJobs)
            // ? (($this->sortDirectionJobs === 'asc') ? $completedBookings->sortBy($this->sortFieldJobs) : $completedBookings->sortByDesc($this->sortFieldJobs))
            // : (($this->filtersJobs['service_provided']) ? $completedBookings->where('service_name', $this->filtersJobs['service_provided']) : $completedBookings),
        ]);
    }
}
