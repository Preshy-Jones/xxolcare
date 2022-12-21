<?php

namespace App\Http\Livewire;

use Livewire\Component;

class XxolstarSortFilter extends Component
{

    public $sortField;
    public $sortDirection;

    public function render()
    {
        return view('livewire.xxolstar-sort-filter');
    }
}
