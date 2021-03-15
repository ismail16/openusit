<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\StudentCourse;
use App\Models\Batch;
use App\User;

class StudentCourseController extends Controller
{
    public function student_courses($id)
    {
        // $url = url()->current();
        // $values = parse_url($url);
        // $host = explode('.',$values['path']);
        // $arr = explode('/', $host[0]);
        $student = User::find($id);
        $studentcourses = StudentCourse::orderBy('id','DESC')->where('user_id',$student->id )->get();

        return view('admin.student_course.index', compact('student','studentcourses'));
    }

    public function student_course_create()
    {
        $id = request()->route('id');
        $student = User::find($id);
        $courses = Course::orderBy('id', 'desc')->get();
        $batchs = Batch::orderBy('id','desc')->get();
        return view('admin.student_course.create', compact('student','courses','batchs'));
    }

    public function store(Request $request)
    {

        // return $request;


        $this->validate($request, [
            'user_id' => 'required',
            'batch_id' => 'required',
        ]);

        $studentcourse = New StudentCourse();
        $studentcourse->user_id = $request->user_id;
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
            return redirect()->route('admin.student_courses', $studentcourse->user_id )->with('success', 'Student Course Create Successfully !');
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
        // $id = request()->route('id');
        // $student = User::find($id);
        $courses = Course::orderBy('id', 'desc')->get();
        $batchs = Batch::orderBy('id','desc')->get();
        return view('admin.student_course.edit', compact('studentcourse','courses','batchs'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
          'user_id' => 'required',
          'batch_id' => 'required',
        ]);

        $studentcourse = StudentCourse::find($id);
        $studentcourse->user_id = $request->user_id;
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
            $student = User::find($request->user_id);
            $studentcourses = StudentCourse::orderBy('id','DESC')->where('user_id',$student->id )->get();
            return view('admin.student_course.index', compact('student','studentcourses'))->with('success', 'Student Course Update Successfully !');
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
