<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller



{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function requestBooks() {
        return view('request');
    }




    public function send(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,

        );

        Mail::to('nimeshadls8@gmail.com')->send(new SendMail($data));
        return redirect()->back()->with('success', 'Thank you for the request!');
    }
}
