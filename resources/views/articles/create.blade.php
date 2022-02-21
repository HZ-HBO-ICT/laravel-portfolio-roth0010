{{--Testing Ground, Disregard--}}
@extends('layout')

@section('meta')
    <title>Article Creation</title>
    <meta name="description"
          content="Create an Article.">
@endsection

@section('content')
    <h1>Create an Article</h1>
        <form action="{{ route('article.store') }}" method="POST">
        @csrf
        <label for="title">Garbage Title:</label><br>
        <input
            type="text"
            id="title"
            name="title"
            placeholder="jsjabet liavbtivg aioiriyg"
            value="{{ old('title') }}"><br>
        @error('title')
        <p class="error">{{ $errors->first('title') }}</p>
        @enderror
        <label for="article_excerpt">Garbage Excerpt:</label><br>
        <input
            type="text"
            id="excerpt"
            name="excerpt"
            placeholder="asfaergbsrathtjjt saasegt"
            value="{{ old('excerpt') }}"><br>
        @error('excerpt')
        <p class="error">{{ $errors->first('excerpt') }}</p>
        @enderror
        <label for="body">Pure Garbage:</label><br>
        <input
            type="text"
            id="body"
            name="body"
            placeholder="jsahebrbfqvwieygbgweoeog egaa"
            value="{{ old('body') }}"
        ><br>
        @error('body')
        <p class="error">{{ $errors->first('body') }}</p>
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection
