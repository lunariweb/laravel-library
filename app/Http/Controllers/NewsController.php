<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{




    public function sample(News $news) {
        return view('sample', compact('news'));
    }

    public function browseNews(News $news) {
        return view('news.browse_news', compact('news'));
    }

    public function news(News $news) {
        return view('news.news', compact('news'));
    }

    public function test() {
        return view('test');
    }
}
