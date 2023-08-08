<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filing;

class File_Controller extends Controller
{
    public function show_file(){
        $data = Filing::all();
        return view('file.show_file', compact('data'));
        }


    public function file_view($id){
        $data = Filing::find($id);
        return view ('file.view_file', compact('data'));
        }

    public function file_download($file){
        return response()->download(public_path('uploads/'.$file));
        }
            
        
}
