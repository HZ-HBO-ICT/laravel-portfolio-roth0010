<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController
{
    /**
     * Literally does nothing. Just here to satisfy the inner workings of Laravel,
     * so I can use resource in the web.php file.
     * @return void
     */
    public function show()
    {
        //
    }

    /**
     * Returns an index of the FAQs
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', ['faqs' => $faqs]);
    }

    /**
     * Goes to a page for creating a new FAQ
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Stores the FAQ
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        Faq::create($this->validateArticle());
        return redirect(route('faq.index'));
    }

    /**
     * Goes to a page for editing the FAQ
     * @param Faq $faq
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    /**
     * updates the FAQ
     * @param Faq $faq
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Faq $faq)
    {
        // For some reason, my brain has connected this line of code with Macaroni and Cheese... don't ask, idk.
        $faq->update($this->validateArticle());
        return redirect(route('faq.index'));
    }

    /**
     * Destroys the FAQ. I'm not doing the maniacal laugh again, that's too much effort.
     * @param Faq $faq
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect(route('faq.index'));
    }

    /**
     * Validates the inputs for a form
     * @return array
     */
    public function validateArticle(): array
    {
        // This seems to work, even though I think it shouldn't. I won't question it further, that's when
        // bad things start happening.
        return request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    }
}
