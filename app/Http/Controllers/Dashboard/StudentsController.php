<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Department;
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
            'students' => Student::with('department.faculty')->get(),
        ]);
    }
    public function create()
    {
       
        return view('dashboard.pages.students.create',[
            'student' => new Student(),
            'departments' => Department::pluck('name', 'id'),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' => 'required|email',
            'student_number' => 'required|unique:students,student_number,except,id',
            'department_id' => 'required|exists:departments,id',
            // 'password' => 'required|confirmed|min:8',
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
            'student' => $student,
            'departments' => Department::pluck('name', 'id'),
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
       $request->validate([
            'name' =>'required',
            'email' => 'required|email|unique:students,email,'.$student->id,
            'student_number' => 'required|unique:students,student_number,'.$student->id,
            'department_id' => 'required|exists:departments,id',
            // 'password' => 'nullable|confirmed|min:8',
        ]);
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
