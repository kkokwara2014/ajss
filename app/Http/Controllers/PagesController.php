<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function publication()
    {
        return view('pages.publication');
    }
    public function faq()
    {
        return view('pages.faq');
    }
    public function editorial()
    {
        return view('pages.editorial');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
