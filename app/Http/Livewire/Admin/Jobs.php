<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
// use Livewire\WithFileUploads;
use App\Models\Care_givers;
use App\Models\Deep_cleaning;
use App\Models\Office_cleaning;
use App\Models\User;
use App\Models\Relocation;
use App\Models\Salon;
use App\Models\Spa;
use App\Models\Standard_home_cleaning;
use App\Support\Collection;
use App\Models\admin as Admin;

class Jobs extends Component
{
    use WithPagination;

    public $view;
    public $loggedAdminName;
    public $search;

    public function mount()
    {
        $this->loggedAdminName = Admin::find(session('LoggedAdmin'))['name'];
        $this->view = 'all';
    }

    public function changeView($view)
    {
//        dd($view);
        $this->view = $view;
    }
    public function check()
    {
        $jobs = collect([]);
        $bookingsCollection = collect([Care_givers::get(), Standard_home_cleaning::get(), Spa::get(), Salon::get(), Office_cleaning::get(), Relocation::get(), Deep_cleaning::get()]);
        for ($i = 0; $i < count($bookingsCollection); $i++) {

            $jobs = $jobs->concat($bookingsCollection[$i]);
        }
        return $jobs;
    }

    public function render()
    {

        //dd(Care_givers::all());
        $jobs = collect([]);
        $bookingsCollection = collect([Care_givers::get(), Standard_home_cleaning::get(), Spa::get(), Salon::get(), Office_cleaning::get(), Relocation::get(), Deep_cleaning::get()]);
        for ($i = 0; $i < count($bookingsCollection); $i++) {

            $jobs = $jobs->concat($bookingsCollection[$i]);
        }

        //dd($jobs);
        return view('livewire.admin.jobs', [

            'jobs' => collect($jobs)->where('reference', '!=', null)
                ->when($this->view === 'active', function ($query) {
                    return $query->where('status', 'Accepted');
                })
                ->when($this->view === 'declined', function ($query) {
                    return $query->where('status', 'Declined');
                })
                ->when($this->view === 'pending', function ($query) {
                    return $query->where('status', 'Pending');
                })
                ->when($this->view === 'done', function ($query) {
                    return $query->where('status', 'Done');
                })
                ->when($this->search, function ($query) {
                    return $query->filter(function ($item) {
                        return false !== stripos($item->service_name, $this->search)
                        || false !== stripos($item->user_name, $this->search)
                        || false !== stripos($item->xxol_star_name, $this->search)
                        || false !== stripos($item->address, $this->search)
                        ;
                    });
                })
            // ->when($this->filters['search'], function ($query) {
            //     $query->searchxxolstars($status);
            // })

            // ->when($this->sortField, function ($query, $status) {
            //     $query->orderBy($status, $this->sortDirection);
            // })
                ->paginate(10),
            // 'jobs' => collect(
            //     ($this->view === 'all') ? $jobs->all() : (
            //         ($this->view === 'active') ? $jobs->where('status', 'Accepted') : (
            //             ($this->view === 'declined') ? $jobs->where('status', 'Declined') : (
            //                 ($this->view === 'pending') ? $jobs->where('status', 'Pending') : (
            //                     ($this->view === 'done') ? $jobs->where('status', 'Done') : (
            //                         ($this->search) ? $jobs->where('status', 'Done') : $jobs->where('status', 'Done')
            //                     )

            //                 )
            //             )
            //         )
            //     )
            // )
            //     ->paginate(10),
        ]);
        // [
        //     when()

        // ];
    }
}
