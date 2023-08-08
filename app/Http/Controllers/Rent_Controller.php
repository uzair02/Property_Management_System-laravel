<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property_Tenant;
use App\Models\Property;
use App\Models\Tenant;


class Rent_Controller extends Controller
{
  //create function
  public function create(){
    $property = Property::all();
    $tenant = Tenant::all();
    return view("rent.create")->with(['properties'=>$property])->with(['tenants'=>$tenant]);
}
public function store(Request $request) {

    $rent = new Property_Tenant; // Must import the Model file: use App\Student;
    $rent->rent_num = $request->get('rent_num');
    $rent->tenant_id = $request->get('tenant');
    $rent->property_id = $request->get('property');
    $rent->pay_status = $request->get('pay_status');
    $rent->rent_status = $request->get('rent_status');
    $rent->lease_term = $request->get('lease_term');

    

    $rent->save(); /* Store data inside the table */
   
    return redirect('rent/create')->with('status', 'Rent "'.$rent->rent_num.'" added Successfully!');
    }

        //read function
    public function read()
    {
        $rent = Property_Tenant::all();
        return view("rent/read")->with(['rents'=>$rent]);
    }  

    //function to update data
    public function edit($id) {
        $id = $id-4436;
        $rent = Property_Tenant::find($id); // Load payments using the model 'Student'
        $property = Property::all();
        $tenant = Tenant::all();
        return view('rent/update')->with(['rents' => $rent])->with(['properties' => $property])->with(['tenants' => $tenant]);
    }
    public function update(Request $request, $id) {
        $rent = Property_Tenant::find($id);
        $rent->id = $request->get('id'); // Copy from textbox and paste on the handler
        $rent->rent_num = $request->get('rent_num');
        $rent->tenant_id = $request->get('tenant');
        $rent->property_id = $request->get('property');
        $rent->pay_status = $request->get('pay_status');
        $rent->rent_status = $request->get('rent_status');
        $rent->lease_term = $request->get('lease_term');
        $rent->save(); 
    
        return redirect('rent/read')->with('status', 'ID '.$id.' updated Successfully!');
        }

    //For delete Operation 
    public function delete($id) {
        Property_Tenant::destroy($id);

        return redirect('rent/read')->with('status', 'Rent deleted Successfully!');
        // --------------------------------------
    }
}
