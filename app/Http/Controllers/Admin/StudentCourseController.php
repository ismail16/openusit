<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\StudentCourse;
use App\User;

class StudentCourseController extends Controller
{
    public function index()
    {
        $students = User::where('role_id', 2)->orderBy('id', 'desc')->get();
        $studentcourses = StudentCourse::orderBy('id','DESC')->get();
        $courses = Course::orderBy('id', 'desc')->get();

        return view('admin.student_course.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.student_course.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'course_id' => 'required',
        ]);

        $studentcourse = New StudentCourse();
        $studentcourse->user_id = $request->user_id;
        $studentcourse->course_id = $request->course_id;
        $studentcourse->batch_id = $request->batch_id;
        $studentcourse->fees = $request->fees;
        $studentcourse->given_amount = $request->given_amount;
        $studentcourse->p_status = $request->p_status;
        $studentcourse->duration = $request->duration;
        $studentcourse->is_certified = $request->is_certified;
        $studentcourse->result = $request->result;
        $studentcourse->status = $request->status;

        try{
            $studentcourse->save();
            return redirect()->route('admin.student-course.show', $studentcourse->id )->with('success', 'Student Course Create Successfully !');
        }catch (\Exception $exception){
            return back()->with('error', 'Something went wrong !');
        }

    }

    public function show($id)
    {
        $student = User::find($id);
        $studentcourses = StudentCourse::orderBy('id','DESC')->where('user_id',$student->id )->get();
        // $course = Course::orderBy('id', 'desc')->where('id',$student->id )->get();
        // return $studentcourses;
        return view('admin.student_course.index', compact('studentcourses'));
    }

    public function edit($id)
    {
        $studentcourse = StudentCourse::find($id);
        return view('admin.student_course.edit', compact('studentcourse'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
          'course_id' => 'required',
        ]);

        $studentcourse = StudentCourse::find($id);
        $studentcourse->course_id = $request->course_id;
        $studentcourse->batch_id = $request->batch_id;
        $studentcourse->fees = $request->fees;
        $studentcourse->given_amount = $request->given_amount;
        $studentcourse->p_status = $request->p_status;
        $studentcourse->duration = $request->duration;
        $studentcourse->is_certified = $request->is_certified;
        $studentcourse->result = $request->result;
        $studentcourse->status = $request->status;

        try{
            $studentcourse->save();
            return redirect()->route('admin.student-course.show', $studentcourse->id )->with('success', 'Student Course Update Successfully !');
        }catch (\Exception $exception){
            return back()->with('error', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        $studentcourse = StudentCourse::find($id);
        $studentcourse->delete();
        return redirect()->route('admin.student-course.index')->with('success', 'Course Deleted Successfully !');
    }
}
