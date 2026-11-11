<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.pages.faculties.index',[
            'faculties' => Faculty::all()
        ]);
    }
    public function create(){
        return view('dashboard.pages.faculties.create',[
            'faculty' => new Faculty()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required','max:20','unique:faculties,code']

        ]);
        Faculty::create($request->all());
        return redirect()->route('dashboard.faculties.index')->with('success','تم الحفظ بنجاح');
    }

    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('dashboard.pages.faculties.edit',[
            'faculty' => $faculty
        ]);
    }
    public function show($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('dashboard.pages.faculties.show',[
            'faculty' => $faculty
        ]);
    }
    public function update(Request $request,$id)
    {
        $faculty = Faculty::findOrFail($id);
        $request->validate([
            'name' => ['required'],
            'code'=>['required','max:20','unique:faculties,code,'.$faculty->id],
        ]);
        $faculty->update($request->all());
        return redirect()->route('dashboard.faculties.index')->with('success','تم التعديل بنجاح');
    }
    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();
        return redirect()->route('dashboard.faculties.index')->with('success','تم الحذف بنجاح');

    }

}
