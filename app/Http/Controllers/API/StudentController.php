<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Student;
use App\Course;
class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return response()->json([
            'status'=> 200,
            'students'=>$students,
        ]);
    }
    public function indexs()
    {
        $courses = Course::all();
        dd($courses);
        return response()->json([
            'status'=> 200,
            'courses'=>$courses,
        ]);
    }
    public function store(Request $request )
    {
        // dd($request->input('name'));
        $student = new Student;
            $student->name = $request->input('name');
            $student->course = $request->input('course');
            $student->email = $request->input('email');
            $student->phone = $request->input('phone');
            $student->save();

        return response()->json([
            "status"=> 200,
            "message" => "Inputed successfully",
        ]);
    }

    public function edit($id){
         $student = Student::find($id);
         if($student)
         {
             return response()->json([
                 'status'=> 200,
                 'student' => $student,
                 'message' => 'success',
             ]);
         }
         else
         {
             return response()->json([
                 'status'=> 404,
                 'message' => 'No Student ID Found',
             ]);
         }
    }

    public function update(Request $request , $id )
    {

            $student = Student::find($id);
            if($student)
            {

                $student->name = $request->input('name');
                $student->course = $request->input('course');
                $student->email = $request->input('email');
                $student->phone = $request->input('phone');
                $student->update();

                return response()->json([
                    'status'=> 200,
                    'message'=>'Student Updated Successfully',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No Student ID Found',
                ]);

        }
    }
    public function destroy ($id){
        $student = Student::find($id);
        if($student)
        {
            $student->delete();
            return response()->json([
                'status'=> 200,
                'message'=>'Student Deleted Successfully',
            ]);
        }
        else
        {
            return response()->json([
                'status'=> 404,
                'message' => 'No Student ID Found',
            ]);
        }
    }
}

