<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller{


    //home
    function home(){
        
        return view('home');
    }

    //go index
   function index(){
    $allStudent = Student::all();
    return view('student.index',compact('allStudent'));
   }

    //go create
    function create(){
    return view('student.create');
   }

   // store save data in database 
   function store(Request $request){
    $student = new Student();
    $student->name = $request->stName;
    $student->grade = $request->stGrade;
    $student->save();
    return redirect()->back()->with('done' ,'Insert Successfuly');
   }

    //go edit
    function edit($id){
        $student = Student::find($id);
    return view('student.edit' , compact('student'));
   }
   //update in database
   function update(Request $request, $id){
    $student = Student::find($id);
    $student->name = $request->stName;
    $student->grade = $request->stGrade;
    $student->save();
    return redirect('student/index')->with('done' ,'Updted Successfuly');
   }

   // delete data
   function destroy($id){
    //to get id in database use 
    $student = Student::find($id);
    //or
    // $student = Student::where('id','=',$id);
     $student->delete();
     return redirect()->back()->with('done' , 'Delete Successfully');
   }
}