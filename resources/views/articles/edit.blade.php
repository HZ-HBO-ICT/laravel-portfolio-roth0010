{{--Testing Ground, Disregard--}}
@extends('layout')

@section('meta')
    <title>Article Editing</title>
    <meta name="description"
          content="Edit an Existing Article.">
@endsection

@section('content')
    <h1>Edit Article: Article Title Here</h1>
    <form action="/article/{{ $article->id }}" method="POST">
        @csrf
        @method('put')
        <label for="article_title">Garbage Title:</label><br>
        <input type="text" id="article_title" name="article_title" placeholder="jsjabet liavbtivg aioiriyg" value="{{ $article->title }}"><br>
        <label for="article_excerpt">Garbage Excerpt:</label><br>
        <input type="text" id="article_excerpt" name="article_excerpt" placeholder="asfaergbsrathtjjt saasegt" value="{{ $article->excerpt }}"><br>
        <label for="article_body">Pure Garbage:</label><br>
        <input type="text" id="article_body" name="article_body" placeholder="jsahebrbfqvwieygbgweoeog egaa" value="{{ $article->body }}"><br><br>
        <input type="submit" value="Submit">
    </form>
@endsection
