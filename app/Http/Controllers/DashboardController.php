<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController
{
    public function show()
    {
        $grades = Grade::all();
        return view('grade', ['grades' => $grades]);
    }
}
