<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $student = Auth::guard('student')->user();
        $student->load('department.faculty');

        return view('student.dashboard.index',[
            'student' => $student,
        ]);
    }
}
