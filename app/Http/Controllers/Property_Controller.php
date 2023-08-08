<?php

namespace App\Http\Controllers;
use App\Models\Property;

// use App\Models\Tenant;

use Illuminate\Http\Request;

class Property_Controller extends Controller
{
    //For read Operation
    public function readProperty()
    {
        $propHandler = Property::all();

        return view("property/read")->with(['properties'=>$propHandler]);
    }

    // for create function
    public function loadProp(){
        return view("property.create");
    }
    public function store(Request $request){
        $property = new Property;
        $property->pro_num = $request->get('pro_num');
        $property->city = $request->get('city');
        $property->address = $request->get('address');
        $property->price = $request->get('price');


        $property->save(); /* Store data inside the table */

        return redirect('property/create')
        ->with('status', 'Property "'.$property->pro_num.'"property added Successfully!');

    }

    //Update by Search
    public function loadSearchud() {
        return view('property.searchud');
    }
    public function storeSearchud(Request $request) {
        $properties = Property::where('pro_num', $request->pro_num)->first(); 
        if(is_null($properties))
        {
            //echo nl2br("<b style='text-align:center;'>Error 404:</b><br>Property Number: ". $request->pro_num . " is Not Found...");
            return redirect()->back()->with('error', 'No result found.');
        }
        else
        {
            return view('property/update')->with(['properties'=>$properties]);
        }
        
    }

    //Delete by Search
    public function sDelete(Request $request) {
        $properties = Property::where('pro_num', $request->pro_num)->first(); 
        if(is_null($properties))
        {
            //echo nl2br("<b style='text-align:center;'>Error 404:</b><br>Property Number: ". $request->pro_num . " is Not Found...");
            return redirect()->back()->with('error', 'No result found.');
        }else{
            $properties->delete();
            return redirect('property/read')->with('success',  'Property "'.$request->pro_num.'" deleted Successfully!');
        }
        
    }

    // for search update****************************************
    // public function sUpdate(Request $request, $pro_num) {

    //     // Locate the row of this CNIC so that updated record
    //     // can be overwritten ONLY on the previous record of this CNIC.
    //     $property = Property::where('pro_num', $pro_num);
    //     // you can add the chech here whether this student exists or not?
    //     $property->id = $request->get('id'); // Copy from textbox and paste on the handler
    //     $property->pro_num = $request->get('pro_num');
    //     $property->city = $request->get('city');
    //     $property->address = $request->get('address');
    //     $property->price = $request->get('price');  

    //     $property->save(); /* Overwrite data on the row pointed by CNIC */
       
    //     return redirect('property/read')->with('status', 'ID '.$id.' updated Successfully!');
    //     }
    //**************************************************************** */




    // for update fucntion
    public function edit($id) {
        $id = $id-4436;
        $properties = Property::find($id); 
        //$tenants = Tenant::all();   ->with(['tenants'=>$tenants])
        return view('property/update')->with(['properties'=>$properties]);
    }

    public function update(Request $request, $id) {
        $property = Property::find($id);
        $property->id = $request->get('id'); // Copy from textbox and paste on the handler
        $property->pro_num = $request->get('pro_num');
        $property->city = $request->get('city');
        $property->address = $request->get('address');
        $property->price = $request->get('price');

        //$property->tenant_id = $request->get('tenant');

        $property->save(); 
       
        return redirect('property/read')->with('status', 'ID '.$id.' updated Successfully!');
        }

        //For delete Operation
        public function delete($id) {
            Property::destroy($id);

            return redirect('property/read')->with('status', 'ID '.$id.' deleted Successfully!');
            // --------------------------------------
            }

    
        //count property

           

}
