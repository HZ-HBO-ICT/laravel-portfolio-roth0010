@extends('layout')

@section('meta')
    <title>FAQ Editing</title>
    <meta name="description"
          content="Edit an FAQ. Why not.">
@endsection

@section('content')
    <h1>Edit an FAQ</h1>
    <form action="/faq/{{ $faq->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="faq_question">Question:</label><br>
        <input type="text" id="faq_question" name="faq_question" placeholder="What?" value="{{ $faq->question }}"><br>
        <label for="faq_answer">Answer:</label><br>
        <input type="text" id="faq_answer" name="faq_answer" placeholder="Yes." value="{{ $faq->answer }}"><br><br>
        <input type="submit" value="Submit">
    </form>
    <h2>DELETE AN FAQ (PLS SPARE ME, IM SCARED)</h2>
    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection

@section('citation')
    <p>Nothing to see here!</p>
@endsection
