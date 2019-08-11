<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function ajssaifpu()
    {
        $title='About AJSSAIFPU';
        return view('about.ajssaifpu', compact('title'));
    }

    public function authorship()
    {
        $title='About Authorship';
        return view('about.authorship', compact('title'));
    }

    public function peerreview()
    {
        $title='About Peer review';
        return view('about.peerreview', compact('title'));
    }

    public function duplicatepublication()
    {
        $title='About Duplicate Publication';
        return view('about.duppublication', compact('title'));
    }

    public function plagiarism()
    {
        $title='About Plagiarism';
        return view('about.plagiarism', compact('title'));
    }
}
