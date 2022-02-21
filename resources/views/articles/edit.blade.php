{{--Testing Ground, Disregard--}}
@extends('layout')

@section('meta')
    <title>Article Editing</title>
    <meta name="description"
          content="Edit an Existing Article.">
@endsection

@section('content')
    <h1>Edit Article: {{ $article->title }}</h1>
    <form action="{{route('article.update', $article->id)}}" method="POST">
{{--        <form action="/article/{{ $article->id }}" method="POST">--}}
        @csrf
        @method('put')
        <label for="title">Garbage Title:</label><br>
        <input type="text" id="title" name="title" placeholder="jsjabet liavbtivg aioiriyg" value="{{ $article->title }}"><br>
        @error('title')
        <p class="error">{{ $errors->first('title') }}</p>
        @enderror
        <label for="excerpt">Garbage Excerpt:</label><br>
        <input type="text" id="excerpt" name="excerpt" placeholder="asfaergbsrathtjjt saasegt" value="{{ $article->excerpt }}"><br>
        @error('excerpt')
        <p class="error">{{ $errors->first('excerpt') }}</p>
        @enderror
        <label for="body">Pure Garbage:</label><br>
        @error('body')
        <p class="error">{{ $errors->first('body') }}</p>
        @enderror
        <input type="text" id="body" name="body" placeholder="jsahebrbfqvwieygbgweoeog egaa" value="{{ $article->body }}"><br><br>
        <input type="submit" value="Submit">
    </form>
    <h2>Delete Article: {{ $article->title }}</h2>
    <form method="POST" action="{{ route('article.destroy', $article->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
