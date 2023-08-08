<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Lease;

class MonthlyPayment_Controller extends Controller
{
    //create function
    public function create(){
        $leases = Lease::all();
        return view("monthlypayment.create", compact('leases'));
    }
    public function store(Request $request) {

        $monthly_payment = new Payment; // Must import the Model file: use App\Student;
        $monthly_payment->paynum = $request->get('paynum');
        $monthly_payment->paydate = $request->get('paydate');
        $monthly_payment->amount = $request->get('amount');
        $monthly_payment->paytype = $request->get('paytype');
        $monthly_payment->lease_id = $request->get('lease');

        $monthly_payment->save(); /* Store data inside the table */
       
        return redirect('monthlypayment/create')->with('status', 'Payment "'.$monthly_payment->paynum.'" added Successfully!');
        }

        //read function
    public function read()
    {
        $leases = Lease::all();
        $payHandler = Payment::all();
        return view("monthlypayment/read")->with(['payments'=>$payHandler])->with(['leases'=>$leases]);
    }  

    //function to update data
    public function edit($id) {
        $id = $id-4436;

        $payments = Payment::find($id); // Load payments using the model 'Student'

        return view('monthlypayment/update')->with(['payments' => $payments])->with(['leases' => $leases]);
    }
    public function update(Request $request, $id) {
        $payment = Payment::find($id);
        $payment->id = $request->get('id'); // Copy from textbox and paste on the handler
        $payment->paynum = $request->get('paynum');
        $payment->paydate = $request->get('paydate');
        $payment->amount = $request->get('amount');
        $payment->paytype = $request->get('paytype');


        $payment->save(); 
       
        return redirect('monthlypayment/read')->with('status', 'ID '.$id.' updated Successfully!');
        }

        //For delete Operation 
        public function delete($id) {
            Payment::destroy($id);

            return redirect('monthlypayment/read')->with('status', 'Payment deleted Successfully!');
            // --------------------------------------
        }
}
