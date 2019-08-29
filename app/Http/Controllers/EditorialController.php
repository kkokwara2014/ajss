<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Editorial;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle='All Editors';
        $editors=Editorial::orderBy('created_at','desc')->get();
        return view('admin.editor.index',compact('pageTitle','editors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle='Create Editor';
        $countries=Country::all();
        return view('admin.editor.create', compact('pageTitle','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'surname'=>'required',
            'firstname'=>'required',
            'othername'=>'required',
            'organization'=>'required',
            'department'=>'required',
            'country_id'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);

        if ($request->hasFile('editor_image')) {
            $filenameWithTime = time() . '_' . $request->editor_image->getClientOriginalName();
            $filenameToStore = $request->editor_image->storeAs('public/editors', $filenameWithTime);
        }else{
            $filenameToStore='nouser2.jpg';
        }

        $editor=new Editorial;
        $editor->title=$request->title;
        $editor->surname=$request->surname;
        $editor->firstname=$request->firstname;
        $editor->othername=$request->othername;
        $editor->organization=$request->organization;
        $editor->department=$request->department;
        $editor->country_id=$request->country_id;
        $editor->phone=$request->phone;
        $editor->email=$request->email;
        $editor->editor_image=$filenameToStore;

        $editor->save();

        return redirect(route('admin.editor.all'))->with('success','New Editor has been created successfully!');

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

    public function showEditors(){
        $title='Editorial Board';
        return view('editorial.editors', compact('title'));
    }
}
