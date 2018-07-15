<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'message'=> 'required'
        ]);
        
        //create message
        $contact = new Contact;
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        //save message
        $contact->save();
        return redirect('/home')->with('success','Message sent');
    }
}
