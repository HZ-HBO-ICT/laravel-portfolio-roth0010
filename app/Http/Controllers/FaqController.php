<?php

namespace App\Http\Controllers;
use App\Models\Faq;

class FaqController
{
    public function show()
    {
        $faqs = Faq::all();
        return view('faq', ['faqs' => $faqs]);

//        dd($faqs);
    }
}
