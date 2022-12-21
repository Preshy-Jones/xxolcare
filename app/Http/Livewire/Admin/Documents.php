<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin as Admin;

class Documents extends Component
{

    public $loggedAdminName;
    public $view;

    public function mount()
    {
        $this->view = 'dashboard';
        $this->loggedAdminName = Admin::find(session('LoggedAdmin'))['name'];
    }

    public function changeView($view)
    {
        $this->view = $view;
    }

    public function render()
    {
        return view('livewire.admin.documents');
    }
}
