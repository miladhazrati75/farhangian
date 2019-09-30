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

Route::get('/', 'StudentsController@masterpage')->name('masterpage');
Route::get('/list-student', 'StudentsController@allOfStudents')->name('student-list');

Route::get('/delete/student/{student_id}', 'StudentsController@deleteStudent')->name('delete.student');

Route::get('/download/student/info', 'StudentsController@studentInfo')->name('download.student.info');

Route::get('/add/student/', 'StudentsController@addStudent')->name('add.get.student');
Route::post('/add/student/', 'StudentsController@createStudent')->name('add.post.student');

Route::get('/edit/student/{student_id}', 'StudentsController@editStudent')->name('edit.get.student');
Route::post('/edit/student/{student_id}', 'StudentsController@updateStudent')->name('edit.post.student');

//Route::post('/edit/student/{student_id}', 'StudentsController@updateStudent')->name('update.student');
Route::get('/login','StudentsController@login');


//start teachers route
Route::get('/list-Professors','ProfessorsController@ProfessorsList')->name('Professors-list');
//end teachers route



//start place route
Route::get('/list-place','placeController@placeList')->name('place-list');
//end place route

Route::get('/add/professor','ProfessorsController@addProfessor')->name('add-get-professor');
Route::post('/add/professor','ProfessorsController@createProfessor')->name('add-post-professor');
