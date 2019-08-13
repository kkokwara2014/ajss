<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function moredocs(){
        $title='Download More Documents';
        return view('downloads.moredocs',compact('title'));
    }
}
