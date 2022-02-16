@extends('layout')

@section('meta')
    <title>FAQ</title>
    <meta name="description"
          content="A collection of Frequently Asked Questions about HZ University of Applied Sciences, and a few more.">
@endsection

@section('content')
        <form action="/faq" method="POST">
            @csrf
            <label for="faq_question">Question:</label><br>
            <input type="text" id="faq_question" name="faq_question" placeholder="What?"><br>
            <label for="faq_answer">Answer:</label><br>
            <input type="text" id="faq_answer" name="faq_answer" placeholder="Yes."><br><br>
            <input type="submit" value="Submit">
        </form>
@endsection

@section('citation')
    <p>Nothing to see here!</p>
@endsection
