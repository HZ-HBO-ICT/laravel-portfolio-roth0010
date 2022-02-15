<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
//        dd($id);
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
}
