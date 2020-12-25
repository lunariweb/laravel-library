<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\admin;
use App\Models\News;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $num_users = User::all();
        $num_books = Book::all();
        $num_admins = admin::all();

        return view('admin', compact('num_users', 'num_books', 'num_admins'));
    }

    // public function manageBooks() {
    //     return view('manage_books');
    // }

    public function customPage() {
        return view('custom_page');
    }



    public function addNewsView() {
        return view('news.add-news');
    }

    public function addNewsSubmit(Request $request) {

        News::addNewsSubmit($request->image);

        News::create($request->all());
        return redirect()->back()->with('message', 'News submitted succesfully!');
    }
}
