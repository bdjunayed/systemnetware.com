<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\SendEmailContactUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
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
        $validateData = $request->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'min:7|max:40',
            'message' => 'max:1024',
            'newsletter' => 'boolean'
        ]);

        $data = array(
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message'),
            'newsletter' => request('newsletter'),
            'ip' => \Request::ip()
        );
        // Store in Database
        Contact::forceCreate($data);
        //return response()->json('Form is success!');
        //return true;

        // Send email

        Mail::to('dedb6f04e6-52a6d1@inbox.mailtrap.io')->send(new SendEmailContactUs($data));

        


        Session::flash("success");
        
        // for api response
        // return response()->json(['message' => 'Thanks for contacting us!']);

        //or 

        // return back()->with('success', 'Thanks for contacting us!');
        return back();
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
}
