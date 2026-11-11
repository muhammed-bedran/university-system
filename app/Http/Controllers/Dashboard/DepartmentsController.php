<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.pages.departments.index',[
            'departments' => Department::with('faculty')->get(),
        ]);
    }
    public function create()
    {
        return view('dashboard.pages.departments.create',[
            'faculties'=> Faculty::pluck('name','id'),
            'department' => new Department()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'faculty_id'=> 'required|exists:faculties,id',
            'name'=> 'required|string|max:255',
            'code'=> 'required|max:20|unique:departments,code,except:id',
        ]);
        Department::create($request->all());
        return redirect()->route('dashboard.departments.index')->with('success','تم اضافة القسم بنجاح');
    }
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('dashboard.pages.departments.edit',[
            'department' => $department,
            'faculties'=> Faculty::pluck('name','id'),
        ]);
    }
    public function update(Request $request,$id)
    {
        $department = Department::findOrFail($id);
        $request->validate([
            'faculty_id'=> 'required|exists:faculties,id',
            'name'=> 'required|string|max:255',
            'code'=> 'required|max:20|unique:departments,code,'.$department->id,
        ]);
        $department->update($request->all());
        return redirect()->route('dashboard.departments.index')->with('success','تم تعديل القسم بنجاح');
        
    }
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->route('dashboard.departments.index')->with('success','تم حذف القسم بنجاح');
    }
    public function show($id)
    {
        $department = Department::findOrFail($id);
        return view('dashboard.pages.departments.show',[
            'department' => $department,
        ]);
    }   
}
