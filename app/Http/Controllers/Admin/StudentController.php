<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Student;
use DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id','DESC')->get();
        return view('admin.student.all', compact('students'));
    }

    public function create()
    {
        $users = User::where('role_id', 2)->orderBy('id', 'desc')->get();
        return view('admin.student.add', compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'batch' => 'required',
            'fees' => 'required|min:3|max:5',
            'given_amount' => 'required|min:3|max:5',
            'p_status' => 'required',
            'c_name' => 'required',
            'duration' => 'required',
        ]);

        $student = new Student;
        $student->user_id = $request->user_id;
        $student->batch_id = $request->batch;
        $student->fees = $request->fees;
        $student->given_amount = $request->given_amount;
        $student->p_status = $request->p_status;
        $student->c_name = $request->c_name;
        $student->duration = $request->duration;
        $student->save();

        return redirect()->route('admin.student.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    public function users()
    {
        $users = User::orderBy('id', 'DESC')->where('role_id', 2)->get();
        return view('admin.student.users', compact('users'));
    }
    public function certificate(Request $request){
        DB::table('students')->where('batch_id', $request->batch_id)->where('is_certified', 0)->update(['is_certified' => 1,'updated_at'=> now()]);
        return back();
    }
    public function payment(Request $request){
        DB::table('students')->where('id', $request->id)->increment('given_amount', $request->given_amount);
        return back();
    }

    public function result(Request $request){
        DB::table('students')->where('id', $request->id)->update(['result' => strtoupper($request->result)]);
        return back();
    }

    public function not_certified(){
        $students = Student::orderBy('id','DESC')->where('is_certified', 0)->get();
        return view('admin.student.not_certified', compact('students'));
    }
    public function certified(){
        $students = Student::orderBy('id','DESC')->where('is_certified', 1)->get();
        return view('admin.student.certified', compact('students'));
    }
}
