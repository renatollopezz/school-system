<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\json;
use App\Group;
class GroupController extends Controller
{
    
    	//find all Group
    function index(){
    	$group = Group::all();
    	return response()->json($group);
    }
	//find all Group = id
    function show($id){
    	$group = Group::findOrFail($id);
    	return response()->json($group);
    }
	//save new Group
    function store(Request $request){
    	$group = $request->all();
    	Group::create($group);
    }
    //update Group = id
    function update($id,Request $request){
    	$group = Group::findOrFail($id);
    	$groupInput = $request->all();
    	$group->fill($groupInput)->save();
    }
    //delete Group = id
    function destroy($id){
    	$group = Group::findOrFail($id);
    	$group->delete();
    }
}
