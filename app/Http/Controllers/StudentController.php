<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{

  public function index()
  {
    $students= Student::all();
    return view('index');
  }


  public function studentList()
  {
    $students= Student::orderBy('registation_id','asc')->get();
    return view('studentList')->with('students',$students);
  }

  public function createStudent()
  {

    return view('createStudent');
  }

  public function editStudent($id)
  {
    $student=Student::find($id);

    return view('editStudent')->with('student',$student);
  }

  public function storeStudent(Request $request)
  {

    // Check Validation
    $this->validate($request,[

      'name'=>'required|string',
      'registrationID'=>'required|integer',
      'department'=>'required|string',
      'info'=>'nullable|string'



  ]);

    //Insert Data into Students Table
    $student = new Student();
    $student->name=$request->name;
    $student->department_name=$request->department;
    $student->registation_id =$request->registrationID;
    $student->info=$request->info;
    $student->save();
    return redirect()->route('studentList');

  }

  public function updateStudent(Request $request, $id)
  {

    //Insert Data into Students Table

    $student = new Student();
    $student->name=$request->name;
    $student->department_name=$request->department;
    $student->registration_id=$request->registrationID;
    $student->info=$request->info;
    $student->update();
    return redirect()->route('studentList');

  }
  public function deleteStudent($id)
  {

    //Delete Data From Students Table
$student=Student::find($id);

    $student->delete();
    return redirect()->route('studentList');

  }
}
