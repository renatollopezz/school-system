<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//router student
Route::resource('student','StudentController');
//router schoolyear
Route::resource('schoolyear','SchoolYearController');
//router schoolyear
Route::resource('group','GroupController');
//router registration
Route::resource('registration','RegistrationController');
//router releaseNote
Route::resource('releasenote','ReleaseNoteController');

Route::get('/modules','ModuleController@index')->middleware('cors');
Route::get('/modules/{id}','ModuleController@show')->middleware('cors');
Route::post('/modules','ModuleController@store')->middleware('cors');
Route::put('/modules/{id}','ModuleController@update')->middleware('cors');
Route::delete('/modules/{id}','ModuleController@destroy')->middleware('cors');

Route::resource('/disciplines','DisciplineController');
