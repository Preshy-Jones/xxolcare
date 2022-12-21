<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Finance;
use App\Models\admin;

class Finances extends Component
{

    use WithPagination;

    public $view;
    public $loggedAdminName;

    public $filters = [
        'search' => '',
    ];

    public function mount()
    {
        $this->loggedAdminName = admin::find(session('LoggedAdmin'))['name'];
        $this->view = 'income';
    }

    public function changeView($view)
    {
        $this->view = $view;
    }
    public function updatingFilters()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.admin.finances', [
            'finances' => Finance::query()
                ->when($this->view === 'income', function ($query, $status) {
                    $query->where('type', 'Income');
                })
                ->when($this->view === 'expense', function ($query, $status) {
                    $query->where('type', 'Expense');
                })
                ->when($this->filters['search'], function ($query, $status) {
                    $query->searchfinances($status);
                })
                ->paginate(10),
        ]);
    }
}
