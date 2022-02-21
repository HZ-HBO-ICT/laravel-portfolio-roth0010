<?php

namespace App\Http\Controllers;
use App\Models\Faq;

class FaqController
{
    public function show()
    {

    }

    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', ['faqs' => $faqs]);
    }

    public function create()
    {
        return view('faqs.create');
    }

    public function store()
    {
        Faq::create($this->validateArticle());
//        $faq = new Faq();
//        $faq->question = request('faq_question');
//        $faq->answer = request('faq_answer');
//        $faq->save();
        return redirect(route('faq.index'));
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faqs.edit', compact('faq'));
    }

    public function update(Faq $faq)
    {
        // For some reason, my brain has connected this line of code with Macaroni and Cheese... don't ask, idk.
        $faq->update($this->validateArticle());
//        $faq = Faq::find($id);
//        $faq->question = request('faq_question');
//        $faq->answer = request('faq_answer');
//        $faq->save();
        return redirect(route('faq.index'));
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect(route('faq.index'));
    }

    public function validateArticle(): array
    {
        // TODO This is the only place where the $request would be used like in
        // the lesson notes, but I've got no clue how or why to use it
        return request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    }
}
