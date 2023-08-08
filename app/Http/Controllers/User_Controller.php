<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class User_Controller extends Controller
{
    //for registration
    //create function
    public function createAdmin(){
        return view("user.register");
    }
    public function storeAdmin(Request $request) {

        $user = new User; // Must import the Model file: use App\Student;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save(); /* Store data inside the table */
        
        return redirect('user/register')->with('status', 'Admin "'.$user->email.'" created Successfully!');
        }


        
    //login function
    public function login(){
        return view("user.login");
    }
    public function verify(Request $request) {
        $admin = User::where('email', $request->email)->where('password', $request->password)->first(); 
        if(is_null($admin)) {
            return redirect()->back()->with('error', 'Wrong credentials! Enter again');
        } else {
            return redirect('layouts/dash');
        }
    }

    public function displayProfile(){
        return view("user.profile");
    }
    
    
}
