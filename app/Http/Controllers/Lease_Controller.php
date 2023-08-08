<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lease;
use App\Models\Property;

class Lease_Controller extends Controller
{
    //For Read Operation
    public function readLease()
    {
        $leaseHandler = Lease::all();
        $prop = Property::all();

        return view("lease/read")->with(['leases'=>$leaseHandler])->with(['properties'=>$prop]);
    }

   // for create function
    public function create(){
        $pHandler = Lease::all();
        $prop = Property::all();
        return view("lease.create")->with(['leases'=>$pHandler])->with(['properties'=>$prop]);
    }
    public function store(Request $request){
        $lease = new Lease;
        $lease->lease_num = $request->get('lease_num');
        $lease->start_date = $request->get('start_date');
        $lease->end_date = $request->get('end_date');
        $lease->total_price = $request->get('amount');
        $lease->security = $request->get('security');
        $lease->property_id = $request->get('property');

        $lease->save(); /* Store data inside the table */

        return redirect('lease/create')
        ->with('status', 'Lease "'.$request->lease_num.'" added Successfully!');

    }


    // for update fucntion through search
    public function loadSearchud(){
        return view("lease.searchud");
    }
    public function storeSearchud(Request $request) {
        $leaseHandler = Lease::where('lease_num', $request->lease_num)->first(); 
        if(is_null($leaseHandler))
        {
            return redirect()->back()->with('error', 'No result found.');        
        }
        else
        {
            return view('lease/update')->with(['leases'=>$leaseHandler]);
        }
        
    }

    // for delete through search
    public function sDelete(Request $request) {
        $leaseHandler = Lease::where('lease_num', $request->lease_num)->first(); 
        if(is_null($leaseHandler))
        {
            return redirect()->back()->with('error', 'No result found.');
        }else{
            $leaseHandler->delete();
            return redirect('lease/read')->with('success',  'Lease "'.$request->lease_num.'" deleted Successfully!');
        }
        
    }
    



      // for update fucntion from table
      public function edit($id) {
        $id = $id-4436;

        $lease = Lease::find($id); 
        $property = Property::all();
        return view('lease/update')->with(['leases'=>$lease])->with(['properties'=>$property]);
    }

    //For update opeartion by table
    public function update(Request $request, $id) {
        $lease = Lease::find($id);
        $lease->id = $request->get('id'); // Copy from textbox and paste on the handler
        $lease->lease_num = $request->get('lease_num');
        $lease->start_date = $request->get('start_date');
        $lease->end_date = $request->get('end_date');
        $lease->total_price = $request->get('amount');
        $lease->security = $request->get('security');
        $lease->property_id = $request->get('property');

        $lease->save(); 
       
        return redirect('lease/read')->with('status', 'ID '.$id.' updated Successfully!');
        }

        //For delete Operation from tablr
        public function delete($id) {
            Lease::destroy($id);

            return redirect('lease/read')->with('status', 'ID '.$id.' deleted Successfully!');
            // --------------------------------------
        }
           

}
