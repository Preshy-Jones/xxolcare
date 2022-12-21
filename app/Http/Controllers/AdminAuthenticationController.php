<?php

namespace App\Http\Controllers;

use App\Models\admin as Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthenticationController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function register()
    {
        return view('admin.register');
    }
    public function save(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:25',

        ]);
        //Insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if ($save) {
//            return back()->with('success', 'New User has been successfuly added to database');
            return redirect('/admin/login')->with('success', 'You have successfully been registered, you can now login!');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    public function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:25',
        ]);

        $userInfo = Admin::where('email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your email address');
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedAdmin', $userInfo->id);
                return redirect('/admin');

            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    public function logout()
    {
        if (session()->has('LoggedAdmin')) {
            session()->pull('LoggedAdmin');
            return redirect('/admin/login');
        }
    }

}
