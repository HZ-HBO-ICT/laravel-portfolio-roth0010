<?php

namespace App\Http\Controllers;

class BlogController
{
    public function show($blog)
    {
        $blogs = [
            'more-field-work' => 'blog10',
            'changelog' => 'blog9',
            'pitch-feedback' => 'blog8',
            'pitch' => 'blog7',
            'motivation' => 'blog6',
            'field-work' => 'blog5',
            'u-swot-m8' => 'blog4',
            'first-feedback' => 'blog3',
            'experience' => 'blog2',
            'study-choice' => 'blog1',
            'home' => 'blog'
        ];

        if (!array_key_exists($blog, $blogs)) {
            abort(404, 'Sorry, that post was not found.');
        }

        return view($blogs[$blog]);
    }
}
