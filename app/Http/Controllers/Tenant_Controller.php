<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;

class Tenant_Controller extends Controller
{
    //create function
    public function create(){
        return view("tenant.create");
    }
    public function store(Request $request) {

        $tenant = new Tenant; // Must import the Model file: use App\Student;
        $tenant->fullname = $request->get('fullname');
        $tenant->cnic = $request->get('cnic');
        $tenant->email = $request->get('email');
        $tenant->phone = $request->get('phone');
        $tenant->save(); /* Store data inside the table */
       
        return redirect('tenant/create')->with('status', 'Tenant "'.$tenant->cnic.'" added Successfully!');
        }

        //read function
    public function read()
    {
        $tHandler = Tenant::all();
        return view("tenant/read")->with(['tenants'=>$tHandler]);
    }  

    //function to update data
    public function edit($id) {
        $id = $id-4436;
        $tenant = Tenant::find($id); // Load payments using the model 'Student'
        return view('tenant/update')->with(['tenants' => $tenant]);
    }
    public function update(Request $request, $id) {
        $tenant = Tenant::find($id);
        $tenant->id = $request->get('id'); // Copy from textbox and paste on the handler
        $tenant->fullname = $request->get('fullname');
        $tenant->cnic = $request->get('cnic');
        $tenant->email = $request->get('email');
        $tenant->phone = $request->get('phone');
        $tenant->save(); 
       
        return redirect('tenant/read')->with('status', 'ID '.$id.' updated Successfully!');
        }

        //For delete Operation 
        public function delete($id) {
            Tenant::destroy($id);

            return redirect('tenant/read')->with('status', 'Tenant deleted Successfully!');
            // --------------------------------------
        }
}
