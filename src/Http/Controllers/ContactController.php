<?php

namespace csesumonpro\contact\Http\Controllers;

use App\Http\Controllers\Controller;
use csesumonpro\contact\Mail\ContactMailable;
use Illuminate\Http\Request;
use csesumonpro\contact\Models\ContactForm;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact_home');
    }
    public function save_contact_form(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:99',
            'email' => 'email|min:10|max:99',
            'subject' => 'required|min:5|max:149',
            'message' => 'required|min:10|max:999'
        ]);

        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request));
        ContactForm::create($request->all());
        return back()->with('message_success', 'Message Send Successfully');
    }
}
