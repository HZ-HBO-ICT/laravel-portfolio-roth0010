<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController
{
    public function show($slug)
    {
//        $post = \DB::table('posts')->where('slug', $slug)->first();

        $post = Post::where('slug', $slug)->firstOrFail();

//        dd($post);

//        $posts = [
//            'more-field-work' => 'blog10',
//            'changelog' => 'blog9',
//            'pitch-feedback' => 'blog8',
//            'pitch' => 'blog7',
//            'motivation' => 'blog6',
//            'field-work' => 'blog5',
//            'u-swot-m8' => 'blog4',
//            'first-feedback' => 'blog3',
//            'experience' => 'blog2',
//            'study-choice' => 'blog1',
//        ];

//        if(! $post) {
//            abort(404);
//        }

        return view('post', [
            'post' => $post
        ]);
    }
}
