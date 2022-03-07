@extends('layout')

@section('meta')

    <title>Edit a Class</title>
    <meta name="description" content="Just testing. For now.">
@endsection

@section('content')
    <h2>Edit a Test</h2>
    <form action="{{ route('grade.update', $grade->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="test_name">Test Name:</label><br>
        <input
            type="text"
            id="test_name"
            name="test_name"
            placeholder="Test Name"
            value="{{ $grade->test_name }}"
        ><br>
        @error('test_name')
        <p class="error">{{ $errors->first('test_name') }}</p>
        @enderror
        <label for="lowest_passing_grade">Lowest Passing Grade:</label><br>
        <input
            type="number"
            id="lowest_passing_grade"
            name="lowest_passing_grade"
            placeholder="5.5"
            value="{{ $grade->lowest_passing_grade }}"
        ><br>
        @error('lowest_passing_grade')
        <p class="error">{{ $errors->first('lowest_passing_grade') }}</p>
        @enderror
        <label for="best_grade">Best Grade:</label><br>
        <input
            type="number"
            id="best_grade"
            name="best_grade"
            placeholder="0.0"
            value="{{ $grade->best_grade }}"
        ><br>
        @error('best_grade')
        <p class="error">{{ $errors->first('best_grade') }}</p>
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
    <form id="delete" method="POST" action="{{ route('grade.destroy', $grade->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" id="delete-button">Delete</button>
    </form>
@endsection

@section('citation')
    <p>Nothing to see here</p>
@endsection
