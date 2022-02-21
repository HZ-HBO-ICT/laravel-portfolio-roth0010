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
        Article::create($this->validateArticle());

        return redirect(route('article.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect(route('article.show', $article->id));
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('article.index'));
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        // TODO This is the only place where the $request would be used like in
        // the lesson notes, but I've got no clue how or why to use it
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
