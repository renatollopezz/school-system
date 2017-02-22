<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\json;
use App\Student;

class StudentController extends Controller
{
	function index(){
		//find all student
		$student = Student::all();
		return response()->json($student);
	}

	function show($id){
		//find student = id
		$student = Student::findOrFail($id);
		return response()->json($student);
	}

	function store(Request $request){
		//sava new student
		$student = $request->all();
		Student::create($student);
		
	}

	function update($id,Request $request){
		//update student = id
		$student = Student::findOrFail($id);
		$studentInput = $request->all();
		$student->fill($studentInput)->save();

	}

	function destroy($id){
		//delete student = id
		$student = Student::findOrFail($id);
		$student->delete();		
	}
}
