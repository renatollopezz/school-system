<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolYear;
use App\Http\Controllers\json;
class SchoolYearController extends Controller
{
	//find all school year
    function index(){
    	$schoolyear = SchoolYear::all();
    	return response()->json($schoolyear);
    }
	//find all school year = id
    function show($id){
    	$schoolyear = SchoolYear::findOrFail($id);
    	return response()->json($schoolyear);
    }
	//save new school year
    function store(Request $request){
    	$schoolyear = $request->all();
    	SchoolYear::create($schoolyear);
    }
    //update school year = id
    function update($id,Request $request){
    	$schoolyear = SchoolYear::findOrFail($id);
    	$schoolyearInput = $request->all();
    	$schoolyear->fill($schoolyearInput)->save();
    }
    //delete school year = id
    function destroy($id){
    	$schoolyear = SchoolYear::findOrFail($id);
    	$schoolyear->delete();
    }
}
