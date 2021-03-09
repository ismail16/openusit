<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        $infos = Student::where('user_id', Auth::user()->id)->get();
        return view('student.dashboard', compact('infos'));
    }
}
