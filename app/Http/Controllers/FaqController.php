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
        $faq = new Faq();
        $faq->question = request('faq_question');
        $faq->answer = request('faq_answer');
        $faq->save();
        return redirect('/faq');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
