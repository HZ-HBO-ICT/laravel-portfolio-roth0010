@extends('layout')

@section('meta')

    <title>My Dashboard - Courses</title>
    <meta name="description" content="A way to make sure I'm on track to graduate, or stay in the program.">
@endsection

@section('content')

    <div class="nbsa">
        <label>Progress towards the NBSA (45 EC Required):</label>
        <progress value="0" max="45"></progress>
    </div>
    <h2>Study Monitor</h2>
    <a href="{{ route('courses.create') }}">
        <button>New Course</button>
    </a>
    <table style="width:20%">
        <tr style="text-align: center;">
            <td class="tbd">To Be Determined</td>
            <td class="fail">Failed</td>
            <td class="pass">Passed</td>
        </tr>
    </table>
    <table style="width:90%">
        <tr class="tbd">
            <th>Quartile</th>
            <th>Course (Test)</th>
            <th>Credits (Best Grade)</th>
        </tr>
        @foreach ($courses as $course)
            <tr class="{{ $course->passed_at === null ? "tbd" : 'pass' }}">
                <td>{{ $course->quartile }}</td>
                <td><a href="{{ route('courses.grade.index', $course->id)}}">{{ $course->name }}</a></td>
                <td>{{ $course->credits }}</td>
                <td><a href="{{ route('courses.edit', $course->id) }}"><button>Edit Course</button></a></td>
        @endforeach
    </table>
@endsection

@section('citation')
    <p>Nothing to see here</p>
@endsection
