<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController
{
    public function show()
    {
//        $grades = Grade::all();
        $PCO_assessment = Grade::where('test_name', 'PCO_assessment')->get();
        // TODO why doesn't this work? Is there a better way to find the thing other than where?
//        dd($PCO);
        return view('dashboard', ['PCO_assessment' => $PCO_assessment]);
    }
}
