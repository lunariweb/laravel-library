<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookCreateRequest;
use App\Models\Book;



class BooksController extends Controller
{
    public function addBooksForm() {
        return view('books.add-books');
    }

    public function addBooksSubmit(BookCreateRequest $request) {
        Book::create($request->all());
        return redirect(route('add-books'))->with('message', 'Book added succesfully!');

    }

}
