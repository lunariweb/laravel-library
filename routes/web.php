<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/browse', [App\Http\Controllers\HomeController::class, 'browsePage'])->name('user-browse');

Route::get('/home/request', [App\Http\Controllers\SendEmailController::class, 'requestBooks'])->name('user-request-books');

Route::get('/home/contact', [App\Http\Controllers\ContactSendEmailController::class, 'contactPage'])->name('user-contact-admin');

Route::post('/home/contact/send', [App\Http\Controllers\ContactSendEmailController::class, 'send'])->name('send-contact-mail');

Route::get('/home/settings', [App\Http\Controllers\HomeController::class, 'settingsPage'])->name('user-settings');

Route::post('/home/requets/send', [App\Http\Controllers\SendEmailController::class, 'send'])->name('send-email');






Route::prefix('admin')->group(function () {

    Route::get('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin-login-show-form');

    Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin-home');

    Route::get('/managebooks', [App\Http\Controllers\AdminController::class, 'manageBooks'])->name('admin-manage-books');


    Route::get('/addbooks', [App\Http\Controllers\BooksController::class, 'addBooksForm'])->name('add-books');

    Route::post('/addbooks', [App\Http\Controllers\BooksController::class, 'addBooksSubmit'])->name('add-books-submit');

    Route::get('/custompage', [App\Http\Controllers\AdminController::class, 'customPage'])->name('custom-page');

    Route::get('/addnews', [App\Http\Controllers\AdminController::class, 'addNews'])->name('admin-add-news');




});




Route::get('/live_search', [App\Http\Controllers\LiveSearch::class, 'index'])->name('search-books');

Route::get('/live_search/action',[App\Http\Controllers\LiveSearch::class, 'action'])->name('live_search.action');




