<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Shows the webpage
     * @param $id the ID for the Article to be shown
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    /**
     * Shows all the Articles. Kind of, it only shows three.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $articleIndex = Article::take(3)->latest()->get();
        return view('articles.index', [
            'articles' => $articleIndex
        ]);
    }

    /**
     * Returns a view to the page for creating an article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Stores an article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        Article::create($this->validateArticle());

        return redirect(route('article.index'));
    }

    /**
     * Returns a page for editing an article
     * @param Article $article Article to be edited
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Updates an article
     * @param Article $article Article to be updates
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect(route('article.show', $article->id));
    }

    /**
     * DESTROYS AN ARTICLE! *maniacal laugh*
     * @param Article $article The article to be cast into the GREAT PIT OF FIRE!
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('article.index'));
    }

    /**
     * A function to validate the article and prevent problems, like blank inputs!
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
