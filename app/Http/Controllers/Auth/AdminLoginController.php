<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;


class AdminLoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin');  //middleware to secure the unauth
    }

    public function showLoginForm() {
        return view('auth.admin-login');
    }

    public function login(Request $request) {
        //valdate the form data
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

        //attempt to log the user in

        if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)) {

            return redirect()->intended(route('admin-home'));
        }



        //if succesfull then redirect to their intended location

        return redirect()->back()->withInput($request->only('email', 'remember'));

        //if unsuccelfull themn redirect bakc to the login form
    }
}
