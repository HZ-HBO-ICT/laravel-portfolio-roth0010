@extends('layout')

@section('meta')

    <title>Create a Class</title>
    <meta name="description" content="Just testing. For now.">
@endsection

@section('content')
    <h2>Create a Course</h2>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label for="name">Course Name:</label><br>
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Course Name"
            value="{{ old('name') }}"
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
            value="{{ old('quartile') }}"
        ><br>
        @error('quartile')
        <p class="error">{{ $errors->first('quartile') }}</p>
        @enderror
        <label for="credits">EC:</label><br>
        <input
            type="number"
            id="credits"
            name="credits"
            placeholder="0.00"
            value="{{ old('credits') }}"
        ><br>
        @error('credits')
        <p class="error">{{ $errors->first('credits') }}</p>
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection

@section('citation')
    <p>Nothing to see here</p>
@endsection
