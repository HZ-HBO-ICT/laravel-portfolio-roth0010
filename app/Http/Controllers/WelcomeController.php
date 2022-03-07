<?php

namespace App\Http\Controllers;

class WelcomeController
{
    /**
     * Returns a view. Yippee!
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('welcome');
    }
}
