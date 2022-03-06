<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController
{
    /**
     * Shows the dashbo... I think this isn't used anymore. Huh.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $grades = Grade::all();
        return view('grade', ['grades' => $grades]);
    }
}
