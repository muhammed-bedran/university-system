<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index()
    {
        // $students = Student::all();
        // return view('dashboard.pages.students.index', compact('students'));
        return view('dashboard.pages.students.index',[
            'students' => Student::all()
        ]);
    }
    public function create()
    {
       
        return view('dashboard.pages.students.create',[
            'student' => new Student(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' => 'required|email',
            'student_number' => 'required|unique:students,student_number,except,id'
        ]);
        //
        Student::create($request->all());
        return redirect()->route('dashboard.students.index')->with('success', 'تم الحفظ بنجاح');
    }
    public function edit($id)
    {
        $student =  Student::findOrFail($id);
        //
        return view('dashboard.pages.students.edit',[
            'student' => $student
        ]);
    }
    public function show($id)
    {
        $student =  Student::findOrFail($id);
        //
        return view('dashboard.pages.students.show', [
            'student' => $student
        ]);
    }
    public function update(Request $request, $id)
    {
        //
       $student = Student::findOrFail($id);
       $student->update($request->all());
       return redirect()->route('dashboard.students.index')->with('success', 'تم التعديل بنجاح');
    }
    public function destroy($id)
    {
        //
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('dashboard.students.index')->with('success', 'تم الحذف بنجاح');
    }
}
