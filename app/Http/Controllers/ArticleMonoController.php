<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleMonoController extends Controller
{
    public function show()
    {
        return view('article', [
            'articles' => \App\Models\Article::take(3)->latest()->get()
        ]);
    }
}
