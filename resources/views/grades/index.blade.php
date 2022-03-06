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
    <a href="{{ route('grade.create') }}"><button>New Class</button></a>
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
{{--            <th>Exam</th>--}}
{{--            <th>Grade</th>--}}
        </tr>
        <?php
        use App\Models\Grade;
        ?>
        @foreach ($courses as $course)
            <tr class="{{ $course->passed_at === null ? "tbd" : 'pass' }}">
                <td>{{ $course->quartile }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->credits }}</td>
        <?php
            $grades = Grade::all()->where('course_id', $course->id);
        ?>
{{--        TODO No clue if this is correct at all.--}}
            @foreach($grades as $grade)
            <tr class="{{ $grade->best_grade === null ? "tbd" : 'pass' }}">
                <td></td>
                <td>{{ $grade->test_name }}</td>
                <td>{{ $grade->best_grade != null ? $grade->best_grade : '' }}</td>
{{--                <td>--}}
{{--                    <form method="POST" action="{{ route('grade.destroy', $grade->id) }}">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button type="submit">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
            @endforeach
        @endforeach
    </table>
@endsection

@section('citation')
    <p>Nothing to see here</p>
@endsection
