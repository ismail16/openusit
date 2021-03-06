<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo;

    public function __construct()
    {
        if(Auth::check() && Auth::user()->role->id == 1 ){
            $this->redirectTo = route('admin.dashboard');
        }else{
            $this->redirectTo = route('student.dashboard');
        }

        $this->middleware('guest')->except('logout');
    }
}
