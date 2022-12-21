<?php

namespace App\Http\Livewire\Admin\Documents;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Contract;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Contracts extends Component
{
    public $loggedadmin;
    public $currentView;
    public $name;

    public $sortField;
    public $sortDirection = 'asc';

    use WithPagination;
    use WithFileUploads;

    public $file;

    protected $listeners = ['closeModal' => 'backToContracts'];

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'file' => 'file|max:10240', // 1MB Max
        ]);
        $preUploadedFileUrl = cloudinary()->upload($this->file->getRealPath(), ["resource_type" => "raw"])->getSecurePath();
        if ($preUploadedFileUrl) {
            $uploadedFileUrl = Str::replace('upload/', 'upload/fl_attachment/', $preUploadedFileUrl);
            try {
                $newContract = new Contract;
                $newContract->name = $this->name;
                $newContract->file_URL = $uploadedFileUrl;
                $save = $newContract->save();
                $this->emit('openModal', 'profile-update-status-modal', ['success', 'Contract added']);
            } catch (\Exception$e) {
                $this->emit('openModal', 'profile-update-status-modal', ['error', $e->getMessage()]);
            }
        }

//        session()->flash('message', 'File Uploaded !');
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

    public function mount()
    {
        $this->currentView = 'contracts';
    }

    public function backToContracts()
    {
        $photo = '';
        return redirect('admin/documents');
    }

    public function viewAddDocuments()
    {
        $this->currentView = 'addDocument';
    }

    public function render()
    {
        return view('livewire.admin.documents.contracts', ['contracts' => Contract::query()
                ->when($this->sortField, function ($query, $status) {
                    $query->orderBy($status, $this->sortDirection);
                })
                ->paginate(10)]);
    }
}
