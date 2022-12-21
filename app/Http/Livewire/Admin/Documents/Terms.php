<?php

namespace App\Http\Livewire\Admin\Documents;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Term_Condition;
use Illuminate\Support\Str;

class Terms extends Component
{
    public $loggedadmin;

    public $currentView;
    public $name;

    public $sortField;
    public $sortDirection = 'asc';

    use WithFileUploads;
    use WithPagination;

    public $file;

    protected $listeners = ['closeModal' => 'backToTerms'];

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
                $newTerm = new Term_Condition;
                $newTerm->name = $this->name;
                $newTerm->file_URL = $uploadedFileUrl;
                $save = $newTerm->save();
                $this->emit('openModal', 'profile-update-status-modal', ['success', 'Term added']);
            } catch (\Exception$e) {
                $this->emit('openModal', 'profile-update-status-modal', ['error', $e->getMessage()]);
            }
        }

//        session()->flash('message', 'File Uploaded !');
    }

    public function mount()
    {
        $this->currentView = 'terms';
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

    public function backToTerms()
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
        return view('livewire.admin.documents.terms', ['terms' => Term_Condition::query()
                ->when($this->sortField, function ($query, $status) {
                    $query->orderBy($status, $this->sortDirection);
                })
                ->paginate(10)]);
    }
}
