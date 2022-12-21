<?php

namespace App\Http\Livewire\Admin\Documents;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Invoice;
use Illuminate\Support\Str;

class Invoices extends Component
{
    public $loggedadmin;
    public $currentView;
    public $name;

    use WithFileUploads;
    use WithPagination;

    public $file;

    protected $listeners = ['closeModal' => 'backToInvoices'];

    public $sortField;
    public $sortDirection = 'asc';

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
                $newInvoice = new Invoice;
                $newInvoice->name = $this->name;
                $newInvoice->file_URL = $uploadedFileUrl;
                $save = $newInvoice->save();
                $this->emit('openModal', 'profile-update-status-modal', ['success', 'Invoice added']);
            } catch (\Exception$e) {
                $this->emit('openModal', 'profile-update-status-modal', ['error', $e->getMessage()]);
            }
        }

//        session()->flash('message', 'File Uploaded !');
    }

    public function mount()
    {
        $this->currentView = 'invoices';
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

    public function backToInvoices()
    {
        $this->file = '';
        return redirect('admin/documents');
    }

    public function viewAddDocuments()
    {
        $this->currentView = 'addDocument';
    }

    public function render()
    {
        return view('livewire.admin.documents.invoices', ['invoices' => Invoice::query()
                ->when($this->sortField, function ($query, $status) {
                    $query->orderBy($status, $this->sortDirection);
                })
                ->paginate(10)]);
    }
}
