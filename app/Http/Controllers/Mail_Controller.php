<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\form_mail;
// for file that are to be stored in the database
use App\Models\Filing;

class Mail_Controller extends Controller
{
    public function open_mail()
    {
        return view("mail.contact");
    }
        
    // Function to send mail when the send mail button is pressed
    public function send_mail(Request $req)
    {
        //for file attachment for email
        $req->validate([
            'file'=> 'required|mimes:pdf,doc,docx,xlx,csv,jpg,png|max:4048',
        ]);

        $filename = 'PMS_'.time().'.'.$req->file->extension();

        $req->file->move('uploads', $filename);

        //for file storage in database
        $filewritter = new Filing;
        $filewritter -> file = $filename;
        $filewritter->save();
        //******************************************************************** */





        // for email info
        $emails = [
            'email' => $req->get('email'),
            'cc' => $req->get('cc'),
            'bcc' => $req->get('bcc')
        ];

        //for other details
        $details = [
            'subject' => $req->get('subject'),
            'body' => $req->get('details'),
            'file_name' => $filename, // Replace with the actual file name variable
            'file_path' => public_path('uploads/'.$filename), // Replace with the actual file path variable
            'sender_name' => $req->get('name') // Replace with the actual sender's name variable
        ];
        
        
        
        if ($emails["cc"] == '' && $emails["bcc"] == '') {
            Mail::to($emails['email'])->send(new form_mail($details));
            return redirect('mail/contact')->with('status', "Email Sent Successfully!");
        } elseif ($emails["bcc"] == '') {
            Mail::to($emails['email'])->cc($emails['cc'])->send(new form_mail($details));
            return redirect('mail/contact')->with('status', "Email Sent Successfully!");
        } else {
            Mail::to($emails['email'])->cc($emails['cc'])->bcc($emails['bcc'])->send(new form_mail($details));
            return redirect('mail/contact')->with('status', "Email Sent Successfully!");
        }
    }
}
