<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller

{
    //
    public function index()
    {
        $courses = Course::all();

        // foreach($courses as $course)
        // {
            // dd($course);
        // }


        return response()->json([
            'status'=> 200,
            'courses'=>$courses,
            // 'studs'=>$courses->stud,
        ]);
    }

    public function course($id)
    {
        $students = Course::find($id);
        $student = $students->stud;


        return response()->json([
            'status'=> 200,
            'students'=>$student,
            // 'studs'=>$courses->stud,
        ]);

    }
}
