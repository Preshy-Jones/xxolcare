<?php

namespace App\Http\Livewire;

use App\Models\Xxolstar;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Rules\countryCode;

class Register extends Component
{

    // public $form = [
    //     'first_name' => '',
    //     'last_name' => '',
    //     'email' => '',
    //     'password' => '',
    //     'address' => '',
    //     'phone' => '',
    //     'state' => 'Lagos',
    //     'country' => 'Nigeria',
    //     'date_of_birth' => '',
    //     'specialization' => '',
    // ];

    use WithFileUploads;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $address;
    public $phone;
    public $state = 'Lagos';
    public $country = 'Nigeria';
    public $date_of_birth;
    public $specialization = [];
    public $location = [];
    public $photo;
    public $biography;

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'required|mimes:jpeg,png,jpg,gif|image|max:1024', // 1MB Max
        ]);
    }
    public function save()
    {
        // dd(['specialization' => $this->specialization, 'location' => $this->location]);
        $this->validate([
            'photo' => 'required|mimes:jpeg,png,jpg,gif|image|max:1024', // 1MB Max
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:xxolstars',
            'password' => 'required|min:5|max:12',
            'address' => 'required',
            'phone' => ['required', 'string', new countryCode],
            'state' => 'required',
            'country' => 'required',
            'location' => 'required',
            'date_of_birth' => 'required',
            'specialization' => 'required',
            'biography' => 'required',
        ]);

        //dd('success');
        $uploadedFileUrl = cloudinary()->upload($this->photo->getRealPath())->getSecurePath();
        $uploadedFileUrl = Cloudinary::upload($this->photo->getRealPath())->getSecurePath();
        if ($uploadedFileUrl) {
            try {
                $xxolstar = new Xxolstar;
                $xxolstar->first_name = $this->first_name;
                $xxolstar->last_name = $this->last_name;
                $xxolstar->address = $this->address;
                $xxolstar->phone = $this->phone;
                $xxolstar->state = $this->state;
                $xxolstar->country = $this->country;
                $xxolstar->date_of_birth = $this->date_of_birth;
                $xxolstar->specialization = $this->specialization;
                $xxolstar->biography = $this->biography;
                $xxolstar->email = $this->email;
                $xxolstar->profile_photo = $uploadedFileUrl;
                $xxolstar->location = $this->location;
                $xxolstar->password = Hash::make($this->password);
                $save = $xxolstar->save();
            } catch (\Exception$e) {
                dd($e->getMessage());
            }
            //dd($uploadedFileUrl);

        } else {
            dd('failure');
        }
//        dd($this->location);

        //Insert data into database

        if ($save) {
//            return back()->with('success', 'New User has been successfuly added to database');
            return redirect('/xxolstars/login')->with('success', 'You have successfully been registered, you can now login!');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    public function render()
    {
        return view('livewire.register');
    }

}
