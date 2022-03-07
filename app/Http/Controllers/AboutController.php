<?php

namespace App\Http\Controllers;

class AboutController
{
    /**
     * Shows the webpage
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('about');
    }
}
