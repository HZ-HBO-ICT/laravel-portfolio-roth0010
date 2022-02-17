@extends('layout')

@section('meta')
    <title>FAQ Editing</title>
    <meta name="description"
          content="Edit an FAQ. Why not.">
@endsection

@section('content')
    <form action="/faq/{{ $faq->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="faq_question">Question:</label><br>
        <input type="text" id="faq_question" name="faq_question" placeholder="What?" value="{{ $faq->question }}"><br>
        <label for="faq_answer">Answer:</label><br>
        <input type="text" id="faq_answer" name="faq_answer" placeholder="Yes." value="{{ $faq->answer }}"><br><br>
        <input type="submit" value="Submit">
    </form>
@endsection

@section('citation')
    <p>Nothing to see here!</p>
@endsection
