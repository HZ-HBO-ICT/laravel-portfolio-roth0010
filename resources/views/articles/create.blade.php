{{--Testing Ground, Disregard--}}
@extends('layout')

@section('meta')
    <title>Article Creation</title>
    <meta name="description"
          content="Hi.">
@endsection

@section('content')
    <form action="/article" method="POST">
        @csrf
        <label for="article_title">Garbage Title:</label><br>
        <input type="text" id="article_title" name="article_title" placeholder="jsjabet liavbtivg aioiriyg"><br>
        <label for="article_excerpt">Garbage Excerpt:</label><br>
        <input type="text" id="article_excerpt" name="article_excerpt" placeholder="asfaergbsrathtjjt saasegt"><br>
        <label for="article_body">Pure Garbage:</label><br>
        <input type="text" id="article_body" name="article_body" placeholder="jsahebrbfqvwieygbgweoeog egaa"><br><br>
        <input type="submit" value="Submit">
    </form>
@endsection
