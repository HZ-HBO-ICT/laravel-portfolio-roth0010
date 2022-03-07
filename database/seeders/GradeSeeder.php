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
            'course_name' => 'Program and Career Orientation',
            'test_name' => 'Assessment',
            'quartile' => '1',
            'ec' => '2.5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Computer Science Basics',
            'test_name' => 'Written Exam',
            'quartile' => '1',
            'ec' => '5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Programming Basics',
            'test_name' => 'Case Study',
            'quartile' => '1',
            'ec' => '5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Case Study',
            'quartile' => '2',
            'ec' => '5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Project',
            'quartile' => '2',
            'ec' => '5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Development',
            'test_name' => 'Case Study',
            'quartile' => '3',
            'ec' => '5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 1',
            'test_name' => 'Project',
            'quartile' => '3',
            'ec' => '2.5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 1',
            'test_name' => 'Assessment',
            'quartile' => '3',
            'ec' => '2.5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 1',
            'test_name' => 'Report',
            'quartile' => '3',
            'ec' => '2.5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 2',
            'test_name' => 'Portfolio',
            'quartile' => '4',
            'ec' => '3'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 2',
            'test_name' => 'Project',
            'quartile' => '4',
            'ec' => '3'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 2',
            'test_name' => 'Assessment',
            'quartile' => '4',
            'ec' => '4'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Personal Professional Development',
            'test_name' => 'Portfolio',
            'quartile' => 'Yes',
            'ec' => '12.5'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'IT Personality 1',
            'test_name' => 'Portfolio',
            'quartile' => 'Yes',
            'ec' => '1.25'
        ]);

        DB::table('grades')->insert([
            'course_name' => 'IT Personality 2',
            'test_name' => 'Portfolio',
            'quartile' => 'Yes',
            'ec' => '1.25'
        ]);
    }
}
