<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students=Student::all();
        return view('index',compact('students'));
    }

    public function edit(Student $student){
        return view('edit',compact('student'));
    }

    public function store(Request $request){
        $student=new Student();
        $student->name=$request->input('name');
        $student->rollNo=$request->input('rollNo');
        $student->save();
        print($student);
        return redirect()->route('home');
    }

    public function update(Request $request,Student $student){
        $student->name=$request->input('name');
        $student->rollNo=$request->input('rollNo');
        $student->save();
        print($student);
        return redirect()->route('home');
    }

    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('home');
    }
}
