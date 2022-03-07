@extends('layout')

@section('meta')

    <title>My Dashboard</title>
    <meta name="description" content="A way to make sure I'm on track to graduate, or stay in the program.">
@endsection

@section('content')

    <div class="nbsa">
        <label>Progress towards the NBSA (45 EC Required):</label>
        <progress value="0" max="45"></progress>
    </div>
    <h2>Study Monitor</h2>
    <a href="{{ route('courses.grade.create', $course->id) }}">
        <button>New Class</button>
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
            <th>Test</th>
            <th>Best Grade</th>
        </tr>
        @foreach ($grades as $grade)
            <tr class="{{ $grade->best_grade === null ? "tbd" : ($grade->best_grade >= 5.5 ? 'pass' : 'fail') }}">
                <td>{{ $grade->test_name }}</td>
                <td>{{ $grade->best_grade != null ? $grade->best_grade : '' }}</td>
                <td><a href="{{ route('grade.edit', $grade->id) }}"><button>Edit</button></a></td>
            </tr>
        @endforeach
    </table>
@endsection

@section('citation')
    <p>Nothing to see here</p>
@endsection
