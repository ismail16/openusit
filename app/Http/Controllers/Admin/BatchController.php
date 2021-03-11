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
        $batchs = Batch::orderBy('id','desc');
        return view('admin.batch.index', compact('batchs'));
    }

    public function create()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return view('admin.batch.create', compact('courses'));
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
