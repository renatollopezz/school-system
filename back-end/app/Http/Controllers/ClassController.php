<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class;
class ClassController extends Controller
{
    
    	//find all Class
    function index(){
    	$class = Class::all();
    	return response()->json($class);
    }
	//find all Class = id
    function show($id){
    	$class = Class::findOrFail($id);
    	return response()->json($class);
    }
	//save new Class
    function store(Request $request){
    	$class = $request->all();
    	Class::create($class);
    }
    //update Class = id
    function update($id,Request $request){
    	$class = Class::findOrFail($id);
    	$classInput = $request->all();
    	$class->fill($classInput)->save();
    }
    //delete Class = id
    function destroy($id){
    	$class = Class::findOrFail($id);
    	$class->delete();
    }
}
