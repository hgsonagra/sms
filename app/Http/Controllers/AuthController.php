<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function save(Request $request)
    {

        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:3|max:12",
            "confirm_password" => "required|same:password"
        ]);

        //save data in model
        $user = new User();
        $user->fullname = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->confirm_password = $request->confirm_password;
        
        $result = $user->save();

        if ($result) {
            return back()->with('success', 'You have registered successfuly');
        } else {
            return back()->with('fail', 'Somthing Wrong');
        }
    }
    public function Userlogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $userdata = User::where('email', '=', $request->email)->first();

        if ($userdata) {

            $password = $request->password;
            $db_password = $userdata->password;

            if ($password == $db_password) {

                $request->Session()->put('loginID', $userdata->id);
                return redirect('/welcome');
            } else {
                return back()->with('fail', 'The password is not match.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }

    public function logout()
    {
        if (Session::has('loginID')) {

            Session::forget('loginID');

            return redirect('/welcome');
        }
    }


    public function welcome()
    {
        // Check if the user is authenticated
        // $authenticated = Session::has('loginID');

        return view('welcome');
    }
}
