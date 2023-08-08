<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Property;
use App\Models\Tenant;
use App\Models\Lease;
use App\Models\Payment;
use App\Models\Property_Tenant;
use App\Models\User;




class Home_Controller extends Controller
{
    public function displayDash(){
        $countten = Tenant::count();
        $countprop = Property::count();
        $countlease = Lease::count();
        $countpay = Payment::count();
        $countrent = Property_Tenant::count();
        
        return view("layouts.index")->with(['no_of_ten'=>$countten])->with(['no_of_prop'=>$countprop])->with(['no_of_lease'=>$countlease])->with(['no_of_pay'=>$countpay])->with(['no_of_rent'=>$countrent]);
    }
    public function displayDoc(){
        return view("layouts.document");
    }

    public function displayHome(){
        $countprop = Property::count();
        $countten = Tenant::count();
        return view(".home_tem")->with(['no_of_ten'=>$countten])->with(['no_of_prop'=>$countprop]);
    }
    

    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/home_tem');
    }
  

    public function show_mail()
    {
        return view('mail');
    }

    
}
