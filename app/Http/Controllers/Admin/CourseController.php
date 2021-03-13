<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;


class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return view('admin.course.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
          'title' => 'required'
        ]);

        $course = new Course;
        $course->title = $request->title;
        $course->slug = $request->slug;
        $image = $request->file('image');
        $img_slug = Str::slug($request->title, '-');
        if (isset($image)){
            $imagename = $img_slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/course')){
                mkdir('images/course', 777, true);
            }
            $image->move('images/course',$imagename);
            $course->image = $imagename;
        }
        $course->class = $request->class;
        $course->price = $request->price;
        $course->duration = $request->duration;
        $course->total_hours = $request->total_hours;
        $course->description = $request->description;
        $course->course_module = $request->course_module;
        $course->software_taught = $request->software_taught;
        $course->career_opportunity = $request->career_opportunity;
        $course->prerequisites = $request->prerequisites;
        $course->status = $request->status;

        try{
            $course->save();
            return redirect()->route('admin.course.index')->with('success', 'Course Saved Successfully !');
        }catch (\Exception $exception){
            return back()->with('error', 'Something went wrong !');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin.course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'title' => 'required',
        ]);

        $course = Course::find($id);
        $course->title = $request->title;
        $course->slug = $request->slug;
        $image = $request->file('image');
        $img_slug = Str::slug($request->title, '-');
        if (isset($image)){
            $imagename = $img_slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/course')){
                mkdir('images/course', 777, true);
            }
            $image->move('images/course',$imagename);
            $course->image = $imagename;
        }
        $course->class = $request->class;
        $course->price = $request->price;
        $course->duration = $request->duration;
        $course->total_hours = $request->total_hours;
        $course->description = $request->description;
        $course->course_module = $request->course_module;
        $course->software_taught = $request->software_taught;
        $course->career_opportunity = $request->career_opportunity;
        $course->prerequisites = $request->prerequisites;
        $course->status = $request->status;

        try{
            $course->save();
            return redirect()->route('admin.course.index')->with('success', 'Course Update Successfully !');
        }catch (\Exception $exception){
            return back()->with('error', 'Something went wrong !');
        }
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        if ($course->course_image) {
            if (file_exists('images/course/'.$course->course_image)){
                unlink('images/course/'.$course->course_image);
            }
        }
        $course->delete();
        return redirect()->route('admin.course.index')->with('success', 'Course Deleted Successfully !');
    }
}
