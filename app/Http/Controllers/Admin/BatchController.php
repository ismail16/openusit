<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Course;

class BatchController extends Controller
{
    public function index()
    {
        $batchs = Batch::orderBy('id','desc')->get();
        return view('admin.batch.index', compact('batchs'));
    }

    public function create()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return view('admin.batch.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'course_id' => 'required',
            'batch_no' => 'required',
            'name' => 'required',
          ]);
          $batch = New Batch();
          $batch->course_id = $request->course_id;
          $batch->batch_no = $request->batch_no;
          $batch->name = $request->name;
          $batch->status = $request->status;
          try{
              $batch->save();
              return redirect()->route('admin.batch.index')->with('success', 'Batch Create Successfully !');
          }catch (\Exception $exception){
              return back()->with('error', 'Something went wrong !');
          }
        
    }

    public function show($id)
    {
        $batch = Batch::find($id);
        return view('admin.batch.show', compact('batch'));
    }

    public function edit($id)
    {
        $batch = Batch::find($id);
        $courses = Course::orderBy('id', 'desc')->get();
        return view('admin.batch.edit', compact('batch','courses'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'course_id' => 'required',
            'batch_no' => 'required',
            'name' => 'required',
          ]);
          $batch = Batch::find($id);
          $batch->course_id = $request->course_id;
          $batch->batch_no = $request->batch_no;
          $batch->name = $request->name;
          $batch->status = $request->status;
          try{
              $batch->save();
              return redirect()->route('admin.batch.index')->with('success', 'Batch Update Successfully !');
          }catch (\Exception $exception){
              return back()->with('error', 'Something went wrong !');
          }
    }

    public function destroy($id)
    {
        //
    }
}
