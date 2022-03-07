<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Course;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        return view('grades.index', [
            'grades' => $course->grades,
            'course' => $course
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        return view('grades.create', ['course' => $course]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Course $course, Request $request)
    {
//        $validatedRequest = $this->validateArticle($request);
//        dd($course->id);
        $grade = new Grade();
        $grade->course_id = $course->id;
        $grade->test_name = request('test_name');
        if ($request->lowest_passing_grade !== null) {
            $grade->lowest_passing_grade = request('lowest_passing_grade');
        } else {
            $grade->lowest_passing_grade = 5.5;
        }
//        dd($grade->lowest_passing_grade);
        $grade->best_grade = request('best_grade');
        $grade->save();
//        dd($grade);
//        Grade::create($this->validateArticle($request));
        return redirect(route('courses.grade.index', $course->id));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Grade $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Grade $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Grade $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->update($this->validateArticle($request));
        return redirect(route('courses.grade.index', $grade->course_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Grade $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
//        dd($course->id);
        $id = $grade->course_id;
        $grade->delete();
//        return redirect(route('courses.grade.index', $course->id));
        // I want this to redirect to the grade index, but $course->id is null and grade is deleted.
        return redirect(route('courses.grade.index', $id));
    }

    /**
     * Validates the input from the form
     * @param $request
     * @return mixed
     */
    private function validateArticle($request)
    {
        return $request->validate([
            'course_id' => 'required|exists:courses,id',
            'test_name' => 'required',
            'lowest_passing_grade' => [
                'nullable',
                'gte:0',
                'lte:10'
            ],
            'best_grade' => [
                'nullable',
                'gte:0',
                'lte:10'
            ]
        ]);
    }
}
