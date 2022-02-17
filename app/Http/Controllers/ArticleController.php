<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        $articleIndex = Article::take(3)->latest()->get();
//        dd($articleIndex);
        return view('articles.index', [
            'articles' => $articleIndex
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
//        dd(request()->all());
        $article = new Article();
        $article->title = request('article_title');
        $article->excerpt = request('article_excerpt');
        $article->body = request('article_body');
        $article->save();
        return redirect('/article');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        $article = Article::find($id);

        $article->title = request('article_title');
        $article->excerpt = request('article_excerpt');
        $article->body = request('article_body');
        $article->save();
        return redirect('/article' . $article->id);
    }

    public function destroy($id)
    {
        $article = Article::find($id);

        $article->delete();
        return redirect('/article');
    }
}
