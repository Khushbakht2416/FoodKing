<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
    public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'message' => 'required'
            ]
            );
        $contact = new ContactModel();
        $contact->name= $request->name;
        $contact->email= $request->email;
        $contact->message= $request->message;
        $contact->save();
        return redirect('/contact')->with('success', 'Thanks for contacting. We\'ll get back to you ASAP');

    }
}
