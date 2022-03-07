<?php

namespace App\Http\Controllers;

class BlogController
{
    /**
     * Shows the selected article
     * @param $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
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
        ];

        if (!array_key_exists($blog, $blogs)) {
            abort(404, 'Sorry, that post was not found.');
        }

        return view($blogs[$blog]);
    }

    /**
     * Shows an index of the blogs
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('blog');
    }
}
