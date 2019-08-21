<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Paper;
use Illuminate\Support\Facades\Mail;
use App\Mail\Submittedpaper;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'All Submitted Paper';

        return view('admin.submittedpaper.index', compact('pageTitle'));
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
        // $title = 'Submit Paper';

        $this->validate($request, [
            'leadauthor' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'papertitle' => 'required',
            'abstract' => 'required',
            'filename' => 'required|file|max:5000|mimes:docx,doc',
        ]);

        
        if ($request->hasFile('filename')) {
            $filenameWithTime = time() . '_' . $request->filename->getClientOriginalName();
            $filenameToStore=$request->filename->storeAs('public/submittedpapers', $filenameWithTime);
        }

        //    create an instance of Paper
        $paper = new Paper;
        $paper->paper_ref = 'ICEIST' . date('Y') . '_' . rand(55000, 99955);
        $paper->leadauthor = $request->leadauthor;
        $paper->email = $request->email;
        $paper->phone = $request->phone;
        $paper->country_id = $request->country_id;
        $paper->papertitle = $request->papertitle;
        $paper->abstract = $request->abstract;
        $paper->filename = $filenameToStore;

        
        
        $paper->save();
        
        return redirect()->back()->with('success', 'Your paper with ref: ' . $paper->paper_ref . ' has been submitted successfully!');
        
        Mail::send(new Submittedpaper());
        // Mail::to($request->email)->send(new SubmittedPaper($paper));

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


    public function showSubmitPaperForm()
    {
        $title = 'Submit Paper';

        $countries = Country::all();
        return view('journal.submitpaper', compact('title', 'countries'));
    }
    public function charges()
    {
        $title = 'Publication Charges';
        return view('journal.charges', compact('title'));
    }
    public function steps()
    {
        $title = 'Publication Steps';
        return view('journal.steps', compact('title'));
    }
    public function ethics()
    {
        $title = 'Publication Ethics';
        return view('journal.ethics', compact('title'));
    }
    public function reviewprocess()
    {
        $title = 'Publication Review Process';
        return view('journal.reviewprocess', compact('title'));
    }
    public function guidelines()
    {
        $title = 'Publication Guidelines';
        return view('journal.guidelines', compact('title'));
    }
    public function modeofpayment()
    {
        $title = 'Mode of Payment';
        return view('journal.modeofpayment', compact('title'));
    }
    public function paperstatus()
    {
        $title = 'Check Paper Status';
        return view('journal.paperstatus', compact('title'));
    }

    public function publishedpaper()
    {
        $title = 'Published Paper';
        return view('journal.publishedpaper', compact('title'));
    }
}
