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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/', 'StudentsController@allOfStudents')->name('masterPage');

Route::get('/delete/student/{student_id}', 'StudentsController@deleteStudent')->name('delete.student');

Route::get('/add/student/', 'StudentsController@addStudent')->name('add.get.student');
Route::post('/add/student/', 'StudentsController@createStudent')->name('add.post.student');

Route::get('/edit/student/{student_id}', 'StudentsController@editStudent')->name('edit.get.student');
Route::post('/edit/student/{student_id}', 'StudentsController@updateStudent')->name('edit.post.student');

//Route::post('/edit/student/{student_id}', 'StudentsController@updateStudent')->name('update.student');












