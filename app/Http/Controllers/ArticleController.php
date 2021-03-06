<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct() {
        $this->authorizeResource(Article::class, 'article');
    }
    
    public function index() {
        $articles = Article::orderBy('published_at', 'DESC')->paginate('3');
        return view('index', ['articles' => $articles]);
    }

    public function profile() {
        return view('profile');
    }

    public function diary() {
        $articles = Article::orderBy('published_at', 'DESC')->paginate('9');
        return view('diary', ['articles' => $articles]);
    }

    public function create() {
        $allTagNames = Tag::all()->map(function ($tag) {
            return ['text' => $tag->name];
        });
 
        return view('articles.create', [
            'allTagNames' => $allTagNames,
        ]);
    }

    public function store(ArticleRequest $request, Article $article) {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->published_at = $article->published_at->format('Y-m-d');
        $article->save();
        $request->tags->each(function ($tagName) use ($article) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $article->tags()->attach($tag);
        });
        return redirect()->route('diary');
    }

    public function edit(Article $article) {
        $tagNames = $article->tags->map(function ($tag) {
            return ['text' => $tag->name];
        });

        $allTagNames = Tag::all()->map(function ($tag) {
            return ['text' => $tag->name];
        });

        return view('articles.edit', [
            'article' => $article,
            'tagNames' => $tagNames,
            'allTagNames' => $allTagNames,
        ]);
    }

    public function update(ArticleRequest $request, Article $article) {
        $article->fill($request->all())->save();
        $article->tags()->detach();
        $request->tags->each(function ($tagName) use ($article) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $article->tags()->attach($tag);
        });
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
