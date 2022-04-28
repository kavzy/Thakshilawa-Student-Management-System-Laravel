<?php

use Illuminate\Support\Facades\Route;

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
    return view('students');
});

Route::get('/studentregister', function () {
    return view('studentregister');
});

Route::post('/regStudent','App\Http\Controllers\StudentController@store');

Route::get('/studentupdate','App\Http\Controllers\StudentController@studentupdate');

Route::get('/studentedit/{id}','App\Http\Controllers\StudentController@studentedit');

Route::post('/updateStudent','App\Http\Controllers\StudentController@updatestudent');

Route::get('/searchstudents','App\Http\Controllers\StudentController@searchstudent');

Route::get('/searchstudentsbyname','App\Http\Controllers\StudentController@searchstudentsbyname');
Route::get('/searchstudentsbynic','App\Http\Controllers\StudentController@searchstudentsbynic');
Route::get('/studentdelete/{id}','App\Http\Controllers\StudentController@studentdelete');

