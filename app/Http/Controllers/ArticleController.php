<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct() {
        $this->authorizeResource(Article::class, 'article');
    }
    
    public function diary() {
        $articles = Article::all()->sortByDesc('created_at');
        return view('diary', ['articles' => $articles]);
    }

    public function create() {
        return view('articles.create');
    }

    public function store(ArticleRequest $request, Article $article) {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('diary');
    }

    public function edit(Article $article) {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(ArticleRequest $request, Article $article) {
        $article->fill($request->all())->save();
        return redirect()->route('diary');
    }

    public function destroy(Article $article) {
        $article->delete();
        return redirect()->route('diary');
    }

    public function show(Article $article) {
        return view('articles.show', ['article' => $article]);
    }
}
