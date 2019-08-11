<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function ajssaifpu()
    {
        return view('about.ajssaifpu');
    }

    public function authorship()
    {
        return view('about.authorship');
    }

    public function peerreview()
    {
        return view('about.peerreview');
    }

    public function duplicatepublication()
    {
        return view('about.duppublication');
    }

    public function plagiarism()
    {
        return view('about.plagiarism');
    }
}
