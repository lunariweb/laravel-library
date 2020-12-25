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




Route::get('/admin/test', [App\Http\Controllers\ManageUsersController::class, 'test']);

Route::prefix('admin')->group(function () {

    Route::get('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin-login-show-form');

    Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin-home');

    Route::get('/managebooks', [App\Http\Controllers\ManageBooksController::class, 'index'])->name('admin-manage-books-view');

    Route::get('/managebooks/action',[App\Http\Controllers\ManageBooksController::class, 'action'])->name('manage-books.action');

    Route::get('/managebooks/{book}/edit', [App\Http\Controllers\ManageBooksController::class, 'edit'])->name('book.edit');

    Route::patch('/managebooks/{book}/update', [App\Http\Controllers\ManageBooksController::class, 'update'])->name('book.update');

    Route::get('/managebooks/{book}/deleteconfirm', [App\Http\Controllers\ManageBooksController::class, 'deleteConfirm'])->name('book.delete-confirm');

    Route::delete('/managebooks/{book}/deletecofirm/delete', [App\Http\Controllers\ManageBooksController::class, 'deleteSubmit'])->name('book.delete.submit');

    Route::get('/addbooks', [App\Http\Controllers\BooksController::class, 'addBooksForm'])->name('add-books');

    Route::post('/addbooks', [App\Http\Controllers\BooksController::class, 'addBooksSubmit'])->name('add-books-submit');

    Route::get('/custompage', [App\Http\Controllers\AdminController::class, 'customPage'])->name('custom-page');




    // --------------------------------------------------------
    Route::get('/manageusers', [App\Http\Controllers\ManageUsersController::class, 'index'])->name('admin-manage-users-view');

    Route::get('/manageusers/action',[App\Http\Controllers\ManageUsersController::class, 'action'])->name('manage-users.action');

    Route::get('/manageusers/{user}/edit', [App\Http\Controllers\ManageUsersController::class, 'edit'])->name('user.edit');

    Route::patch('/manageusers/{user}/update', [App\Http\Controllers\ManageUsersController::class, 'update'])->name('user.update');

    Route::get('/manageusers/{user}/deleteconfirm', [App\Http\Controllers\ManageUsersController::class, 'deleteConfirm'])->name('user.delete-confirm');

    Route::delete('/manageusers/{user}/deletecofirm/delete', [App\Http\Controllers\ManageUsersController::class, 'deleteSubmit'])->name('user.delete.submit');

    Route::get('/addnews', [App\Http\Controllers\AdminController::class, 'addNewsView'])->name('admin-add-news-view');

    Route::post('/addnews', [App\Http\Controllers\AdminController::class, 'addNewsSubmit'])->name('admin-add-news-submit');






});




Route::get('/live_search', [App\Http\Controllers\LiveSearch::class, 'index'])->name('search-books');

Route::get('/live_search/action',[App\Http\Controllers\LiveSearch::class, 'action'])->name('live_search.action');




Route::get('/{news}/sample', [App\Http\Controllers\NewsController::class, 'sample']);

Route::get('/browsenews', [App\Http\Controllers\NewsController::class, 'browseNews'])->name('browse-news');

Route::get('/browsenews/{news}/news', [App\Http\Controllers\NewsController::class, 'news']);

