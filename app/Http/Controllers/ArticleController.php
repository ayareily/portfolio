<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function diary() {
        return view('diary');
    }

    public function create() {
        return view('articles.create');
    } //
}
