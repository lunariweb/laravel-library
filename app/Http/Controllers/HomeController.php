<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function browsePage() {
        return view('browse');
    }

    public function browseFantasy() {
        return view('browseFantasy');
    }

    public function browseNovels() {
        return view('browseNovels');
    }

    public function browseComics() {
        return view('browseComics');
    }

    public function browseAdventure() {
        return view('browseAdventure');
    }



    public function contactPage() {
        return view('contact');
    }

    public function settingsPage(User $user) {
        return view('user-settings', compact('user'));
    }

    public function sidebar() {
        return view('sidebars.sidebar');
    }

    public function userProfileImgSubmit(Request $request, User $user) {

        $user = User::findOrFail(Auth::user('User')->id);
        $user->name = $request->get('name');
        // $admin->email = $request->get('email');
        // $admin->password = $request->get('password');
        User::userProfileImgSubmit($request->image);
        $user->image = $request->file('image');
        // $admin->job_title = $request->get('job_title');
        $user->fullname = $request->get('fullname');
        $user->address = $request->get('address');
        $user->birthday = $request->get('birthday');
        $user->age = $request->get('age');
        $user->gender = $request->get('gender');
        $user->mobile = $request->get('mobile');
        $user->save();


        // admin::update($request->all());
        return redirect()->back();
    }

    
}
