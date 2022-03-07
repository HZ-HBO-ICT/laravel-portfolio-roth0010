@extends('layout')

@section('meta')
    <title>FAQ Editing</title>
    <meta name="description"
          content="Edit an FAQ. Why not.">
@endsection

@section('content')
    <h1>Edit an FAQ</h1>
    <form action="{{route('faq.update', $faq->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="question">Question:</label><br>
        <input type="text" id="question" name="question" placeholder="What?" value="{{ $faq->question }}"><br>
        @error('question')
        <p class="error">{{ $errors->first('question') }}</p>
        @enderror
        <label for="answer">Answer:</label><br>
        <input type="text" id="answer" name="answer" placeholder="Yes." value="{{ $faq->answer }}"><br>
        @error('answer')
        <p class="error">{{ $errors->first('answer') }}</p>
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
    <h2>DELETE AN FAQ (PLS SPARE ME, IM SCARED)</h2>
    <form method="POST" action="{{ route('faq.destroy', $faq->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection

@section('citation')
    <p>Nothing to see here!</p>
@endsection
