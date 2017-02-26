<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Http\Controllers\json;

class RegistrationController extends Controller
{
function index(){
		//find all registration
		$registration = Registration::all();
		return response()->json($registration);
	}

	function show($id){
		//find registration = id
		$registration = Registration::findOrFail($id);
		return response()->json($registration);
	}

	function store(Request $request){
		//sava new registration
		$registration = $request->all();
		Student::create($registration);
		
	}

	function update($id,Request $request){
		//update registration = id
		$registration = Registration::findOrFail($id);
		$registrationInput = $request->all();
		$registration->fill($registrationInput)->save();

	}

	function destroy($id){
		//delete registration = id
		$registration = Registration::findOrFail($id);
		$registration->delete();		
	}
}
