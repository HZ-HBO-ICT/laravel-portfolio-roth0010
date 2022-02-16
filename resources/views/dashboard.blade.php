{{--TODO this doesn't work, brings up errors and acts like it doesn't have anything inside the arrays being passed.--}}
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
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        @foreach ($grades as $grade)
            <tr class="{{ $grade->best_grade === null ? "tbd" : ($grade->passed_at !== null ? "pass" : "fail") }}">
                <td>{{ $grade->quartile }}</td>
                <td>{{ $grade->course_name }}</td>
                <td>{{ $grade->ec }}</td>
                <td>{{ $grade->test_name }}</td>
                <td>{{ $grade->best_grade != null ? $grade->best_grade : '' }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('citation')
    <p>Nothing to see here</p>
@endsection
