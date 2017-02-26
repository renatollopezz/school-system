<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReleaseNote;
use App\Http\Controllers\json;

class ReleaseNoteController extends Controller
{
    function index(){
		//find all releaseNote
		$releaseNote = ReleaseNote::all();
		return response()->json($releaseNote);
	}

	function show($id){
		//find releaseNote = id
		$releaseNote = ReleaseNote::findOrFail($id);
		return response()->json($releaseNote);
	}

	function store(Request $request){
		//sava new releaseNote
		$releaseNote = $request->all();
		Student::create($releaseNote);
		
	}

	function update($id,Request $request){
		//update releaseNote = id
		$releaseNote = ReleaseNote::findOrFail($id);
		$releaseNoteInput = $request->all();
		$releaseNote->fill($registrationInput)->save();

	}

	function destroy($id){
		//delete releaseNote = id
		$releaseNote = ReleaseNote::findOrFail($id);
		$releaseNote->delete();		
	}
}

