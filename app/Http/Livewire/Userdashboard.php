<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Userdashboard extends Component
{

    public $email;
    public $name;

    public function edit()
    {
        if (Auth::user()['email'] == $this->email) {
            // dd('hello');
            $this->validate([
                'email' => 'required',
                'name' => 'required',
            ]);
        } else {
            // dd('hi');
            $this->validate([
                'email' => 'required|email|unique:users,email',
                'name' => 'required',
            ]);
        }

        try {

            $user = User::find(Auth::id());
            $user->email = $this->email;
            $user->name = $this->name;
            $user->save();
        } catch (\Exception$e) {
            echo $e->getMessage();
        }
        return redirect('/dashboard');
    }
    public function render()
    {
        return view('livewire.userdashboard');
    }
}
