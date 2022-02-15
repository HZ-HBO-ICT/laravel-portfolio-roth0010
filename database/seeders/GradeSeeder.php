<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Todo how to get the timestamps for the passed_at variable to do the thing in models?
        //For now, I'm going to just use the tinker method to add new grades.
        DB::table('grades')->insert([
            'course_name' => 'PCO',
            'test_name' => 'PCO_assessment'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'CSB',
            'test_name' => 'CSB_exam'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'PB',
            'test_name' => 'PB_case_study'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'OOP',
            'test_name' => 'OOP_case_study'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'OOP',
            'test_name' => 'OOP_project'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'framework_dev',
            'test_name' => 'framework_case_study'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'framework_project_1',
            'test_name' => 'FP1_project'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'framework_project_1',
            'test_name' => 'FP1_assessment'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'framework_project_1',
            'test_name' => 'FP1_report'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'framework_project_2',
            'test_name' => 'FP2_portfolio'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'framework_project_2',
            'test_name' => 'FP2_project'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'framework_project_2',
            'test_name' => 'FP2_assessment'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'PPD',
            'test_name' => 'PPD_portfolio'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'ITP',
            'test_name' => 'ITP-one'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'ITP',
            'test_name' => 'ITP-two'
        ]);

    }
}
