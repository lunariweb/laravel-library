<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function settingsPage() {
        return view('user-settings');
    }

    public function sidebar() {
        return view('layouts.sidebar');
    }
}
