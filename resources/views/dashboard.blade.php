//TODO this doesn't work, brings up errors and acts like it doesn't have anything inside the arrays being passed.
@extends('layout')

@section('meta')

    <title>My Dashboard</title>
    <meta name="description" content="A way to make sure I'm on track to graduate, or stay in the program.">
@endsection

@section('content')
    {{ dd($PCO_assessment->best_grade) }}
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
    <tr class="{{ $grades::where('test_name', 'PCO_assessment')->get()->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td rowspan="3">1</td>
        <td>Program and Career Orientation</td>
        <td>2.5</td>
        <td>Assessment</td>
        <td>10.0</td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>Computer Science Basics</td>
        <td>5</td>
        <td>Written Exam</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>Programming Basics</td>
        <td>5</td>
        <td>Case Study</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td rowspan="2">2</td>
        <td rowspan="2">Object Oriented Programming</td>
        <td rowspan="2">10</td>
        <td>Project</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>Project</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td rowspan="4">3</td>
        <td>Framework Development</td>
        <td>5</td>
        <td>Case Study</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td rowspan="3">Framework Project 1</td>
        <td rowspan="3">7.5</td>
        <td>Project</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>Assessment</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>Report</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td rowspan="3">4</td>
        <td rowspan="3">Framework Project 2</td>
        <td rowspan="3">10</td>
        <td>Portfolio</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>Project</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>Assessment</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>Yes</td>
        <td>Personal Professional Development</td>
        <td>12.5</td>
        <td>Portfolio</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>"Whenever"</td>
        <td>Personality 1</td>
        <td>1.25</td>
        <td>Portfolio</td>
        <td></td>
    </tr>
    <tr class="{{ $grades[$course]->best_grade = null ? "tbd" : $grades[$course]->passed_at != null ? "pass" : "fail" }}">
        <td>"Whenever"</td>
        <td>Personality 2</td>
        <td>1.25</td>
        <td>Portfolio</td>
        <td></td>
    </tr>
</table>
@endsection

@section('citation')
    <p>Nothing to see here</p>
@endsection
