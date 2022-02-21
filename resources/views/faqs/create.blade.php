@extends('layout')

@section('meta')
    <title>FAQ</title>
    <meta name="description"
          content="A collection of Frequently Asked Questions about HZ University of Applied Sciences, and a few more.">
@endsection

@section('content')
        <form action="{{ route('faq.store') }}" method="POST">
            @csrf
            <label for="question">Question:</label><br>
            <input type="text" id="question" name="question" placeholder="What?"><br>
            @error('question')
            <p class="error">{{ $errors->first('question') }}</p>
            @enderror
            <label for="answer">Answer:</label><br>
            <input type="text" id="answer" name="answer" placeholder="Yes."><br>
            @error('answer')
            <p class="error">{{ $errors->first('answer') }}</p>
            @enderror
            <br>
            <input type="submit" value="Submit">
        </form>
@endsection

@section('citation')
    <p>Nothing to see here!</p>
@endsection
