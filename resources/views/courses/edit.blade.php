@extends('layout')

@section('meta')

    <title>Edit a Class</title>
    <meta name="description" content="Just testing. For now.">
@endsection

@section('content')
    <h2>Edit a Course</h2>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Course Name:</label><br>
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Course Name"
            value="{{ $course->name }}"
        ><br>
        @error('name')
        <p class="error">{{ $errors->first('name') }}</p>
        @enderror
        <label for="quartile">Quartile:</label><br>
        <input
            type="number"
            id="quartile"
            name="quartile"
            placeholder="1"
            value="{{ $course->quartile }}"
        ><br>
        @error('quartile')
        <p class="error">{{ $errors->first('quartile') }}</p>
        @enderror
        <label for="credits">Credits:</label><br>
        <input
            type="number"
            id="credits"
            name="credits"
            placeholder="0.00"
            value="{{ $course->credits }}"
        ><br>
        @error('credits')
        <p class="error">{{ $errors->first('credits') }}</p>
        @enderror
        <input type="submit" value="Submit">
    </form>
    <form id="delete" method="POST" action="{{ route('courses.destroy', $course->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" id="delete-button">Delete</button>
    </form>
@endsection

@section('citation')
    <p>Nothing to see here</p>
@endsection
