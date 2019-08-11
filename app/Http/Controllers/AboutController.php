<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function ajssaifpu()
    {
        return view('about.ajssaifpu');
    }
    public function authorshop()
    {
        return view('about.authorship');
    }
}
