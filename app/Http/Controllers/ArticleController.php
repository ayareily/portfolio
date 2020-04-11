<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function diary() {
        $articles = Article::all()->sortByDesc('created_at');
        return view('diary', ['articles' => $articles]);
    }

    public function create() {
        return view('articles.create');
    } 
}
