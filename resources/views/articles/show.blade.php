@extends('layout')

@section('meta')
    <title>{{ $article->title }}</title>
    <meta name="description" content="{{ $article->excerpt }}.">
@endsection

@section('content')
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->body }}</p>
@endsection

