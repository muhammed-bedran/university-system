<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoFactorAuthenticationController extends Controller
{
    //
    public function index()
    {
        $user = Auth::guard('student')->user();
        return view('student.dashboard.two-factor-auth',[
            'user'=> $user,
        ]);
    }
}
