<?php

namespace App\Http\Livewire\Xxolstar;

use Livewire\Component;
use App\Models\Xxolstar;
use Livewire\WithFileUploads;

class Profile extends Component
{

    use WithFileUploads;

    public $loggeduserinfo;
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

    public function mount()
    {
        $this->xxolstar = $this->loggeduserinfo;
        $this->viewedPhoto = $this->loggeduserinfo['profile_photo'];
        $this->first_name = $this->loggeduserinfo['first_name'];
        $this->last_name = $this->loggeduserinfo['last_name'];
        $this->email = $this->loggeduserinfo['email'];
        $this->password = $this->loggeduserinfo['password'];
        $this->address = $this->loggeduserinfo['address'];
        $this->phone = $this->loggeduserinfo['phone'];
        $this->state = $this->loggeduserinfo['state'];
        $this->country = $this->loggeduserinfo['country'];
        $this->date_of_birth = $this->loggeduserinfo['date_of_birth'];
        $this->specialization = $this->loggeduserinfo['specialization'];
        $this->location = $this->loggeduserinfo['location'];
        $this->biography = $this->loggeduserinfo['biography'];
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
        // return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.xxolstar.profile');
    }
}
