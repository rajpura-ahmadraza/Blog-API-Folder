<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use LDAP\Result;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    
    function list(){
        return Student::all();
    }

    function addStudent(Request $request){

        $student = new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        if($student->save()){
            return ["result"=>"New Student Added"];
        }else{
            return ["result"=>"Student Not Added"];
        }

    } 
    
    function updateStudent(Request $request){
        $student= Student::find($request->id);
        $student->name= $request->name;
        $student->email= $request->email;
        $student->phone= $request->phone;
        if($student->save()){
            return ["result"=>"Student Updated"];
        }else{
            return ["result"=>"Student Not Updated"];
        }
    }

    function deleteStudent($id){
        $student= Student::destroy($id);
        if($student){
            return ["result"=>"Student Deleted"];
        }else{
            return ["result"=>"Student Not Deleted"];
        }
    }   
}