<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    
    public function moredocs(){
        $title='Download More Documents';
        return view('downloads.moredocs',compact('title'));
    }

    public function file(){
        // $file = '../storage/app/uploads/1.pdf';
        $file = url('/downloads/about_authorship.pdf');
        $name = basename($file);
        return response()->download($file, $name);
    }
}
