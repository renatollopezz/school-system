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

Route::get('/modules','ModuleController@index');
Route::get('/modules/{id}','ModuleController@show');
Route::post('/modules','ModuleController@store');
Route::put('/modules/{id}','ModuleController@update');
Route::delete('/modules/{id}','ModuleController@destroy');

Route::resource('/disciplines','DisciplineController');
