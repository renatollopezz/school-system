<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discipline;

class DisciplineController extends Controller
{

    public function index()
    {
        return Discipline::all();
    }

    public function store(Request $request)
    {
        return Discipline::create($request->all());
    }

    public function show($id)
    {
       return Discipline::find($id);
    }

    public function update(Request $request, $id)
    {
       $discipline = Discipline::find($id);
       $discipline->fill($request->all());
       $discipline->save();
    }

    public function destroy($id)
    {
      $discipline = Discipline::find($id);
      $discipline->delete();
    }
}
