@extends('layout')

@section('meta')

    <title>Create a Class</title>
    <meta name="description" content="Just testing. For now.">
@endsection

@section('content')
    <h2>Create a Class</h2>
    <form action="{{ route('grade.store') }}" method="POST">
        @csrf
        <label for="course_name">Course Name:</label><br>
        <input
            type="text"
            id="course_name"
            name="course_name"
            placeholder="Course Name"
            value="{{ old('course_name') }}"
        ><br>
        @error('course_name')
        <p class="error">{{ $errors->first('course_name') }}</p>
        @enderror
        <label for="test_name">Test Name:</label><br>
        <input
            type="text"
            id="test_name"
            name="test_name"
            placeholder="Test Name"
            value="{{ old('test_name') }}"
        ><br>
        @error('test_name')
        <p class="error">{{ $errors->first('test_name') }}</p>
        @enderror
        <label for="quartile">Quartile:</label><br>
        <input
            type="number"
            id="quartile"
            name="quartile"
            placeholder="1"
            value="{{ old('quartile') }}"
        ><br>
        @error('quartile')
        <p class="error">{{ $errors->first('quartile') }}</p>
        @enderror
        <label for="ec">EC:</label><br>
        <input
            type="number"
            id="ec"
            name="ec"
            placeholder="0.00"
            value="{{ old('number') }}"
        ><br>
        @error('ec')
        <p class="error">{{ $errors->first('ec') }}</p>
        @enderror
        <label for="lowest_passing_grade">Lowest Passing Grade:</label><br>
        <input
            type="number"
            id="lowest_passing_grade"
            name="lowest_passing_grade"
            placeholder="5.5"
            value="{{ old('lowest_passing_grade') }}"
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
            value="{{ old('best_grade') }}"
        ><br>
        @error('best_grade')
        <p class="error">{{ $errors->first('best_grade') }}</p>
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection

@section('citation')
    <p>Nothing to see here</p>
@endsection
