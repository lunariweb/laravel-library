<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\admin;
use App\Models\News;

use Illuminate\Support\Facades\Auth;

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

    public function customPage(admin $admin) {
        return view('custom_page', compact('admin'));
    }



    public function addNewsView() {
        return view('news.add-news');
    }

    public function addNewsSubmit(Request $request) {

        News::addNewsSubmit($request->image);

        News::create($request->all());
        return redirect()->back()->with('message', 'News submitted succesfully!');
    }

    public function sidebar() {
        return view('sidebars.adminSidebar_settings');
    }

    public function adminProfileImgSubmit(Request $request, admin $admin) {

        $admin = admin::findOrFail(Auth::user('admin')->id);
        $admin->name = $request->get('name');
        $admin->email = $request->get('email');
        $admin->password = $request->get('password');
        admin::adminProfileImgSubmit($request->image);
        $admin->image = $request->file('image');
        $admin->job_title = $request->get('job_title');
        $admin->save();


        // admin::update($request->all());
        return redirect()->back();
    }


}
