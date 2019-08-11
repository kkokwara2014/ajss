<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showSubmitPaperForm(){
        $title='Submit Paper';
        return view('journal.submitpaper', compact('title'));
    }
    public function charges(){
        $title='Publication Charges';
        return view('journal.charges', compact('title'));
    }
    public function steps(){
        $title='Publication Steps';
        return view('journal.steps', compact('title'));
    }
    public function ethics(){
        $title='Publication Ethics';
        return view('journal.ethics',compact('title'));
    }
    public function reviewprocess(){
        $title='Publication Review Process';
        return view('journal.reviewprocess', compact('title'));
    }
    public function guidelines(){
        $title='Publication Guidelines';
        return view('journal.guidelines',compact('title'));
    }
    public function modeofpayment(){
        $title='Mode of Payment';
        return view('journal.modeofpayment',compact('title'));
    }
    public function paperstatus(){
        $title='Check Paper Status';
        return view('journal.paperstatus', compact('title'));
    }
}
