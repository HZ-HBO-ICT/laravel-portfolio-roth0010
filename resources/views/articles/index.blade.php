{{--Testing Ground, Disregard--}}
@extends('layout')

@section('meta')
    <title>Articles</title>
    <meta name="description"
          content="A whole bunch of Articles. Testing stuff, ignore.">
@endsection

@section('content')
    <h2>WELCOME to the A R T I C L E S</h2>
    <h3><a style="color: hotpink" href="{{ route( 'article.create') }}">Submit your own HOT GARBAGE</a></h3>
    <ul>
        @foreach ($articles as $article)
            <li>
                <h3>
                    <a id="backinblack" href="/article/{{ $article->id }}">{{ $article->title }}</a>
                </h3>
                <p>{{ $article->excerpt }}</p>
            </li>
        @endforeach
    </ul>
@endsection
