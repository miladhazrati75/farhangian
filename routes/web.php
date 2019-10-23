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
//Route::get('/', 'Admin\StudentsController@masterpage')->name('masterpage');

Route::get('/','DashboardController@Dashbord')->name('masterpage');

Route::get('/list-student', 'Admin\StudentsController@allOfStudents')->name('student-list');

Route::get('/delete/student/{student_id}', 'Admin\StudentsController@deleteStudent')->name('delete.student');

Route::get('/delete/professor/{professor_id}', 'Admin\ProfessorsController@deleteProfessor')->name('delete.professor');

Route::get('/download/student/info', 'Admin\StudentsController@studentInfo')->name('download.student.info');

Route::get('/add/student/', 'Admin\StudentsController@addStudent')->name('add.get.student');
Route::post('/add/student/', 'Admin\StudentsController@createStudent')->name('add.post.student');

Route::get('/edit/student/{student_id}', 'Admin\StudentsController@editStudent')->name('edit.get.student');
Route::post('/edit/student/{student_id}', 'Admin\StudentsController@updateStudent')->name('edit.post.student');

//Route::post('/edit/student/{student_id}', 'Admin\StudentsController@updateStudent')->name('update.student');
//Route::get('/login','Admin\StudentsController@login');


//start teachers route
Route::get('/list-Professors','Admin\ProfessorsController@ProfessorsList')->name('Professors-list');
//end teachers route

//Start Auth
Route::get('/login','UsersController@login')->name('login');
Route::post('/login','UsersController@doLogin')->name('post-login');
Route::get('/logout','UsersController@logout')->name('logout');
//End Auth

//start add list professor
Route::get('/add/professor','Admin\ProfessorsController@addProfessor')->name('add-get-professor');
Route::post('/add/professor','Admin\ProfessorsController@createProfessor')->name('add-post-professor');
//end add list professor

//start edit list professor
Route::get('/edit/professor/{professor_id}','Admin\ProfessorsController@editProfessor')->name('edit-get-professor');
Route::post('/edit/professor/{professor_id}','Admin\ProfessorsController@updateProfessor')->name('edit-post-professor');
//end edit list professor

//start place route
Route::get('/list-place','Admin\PlaceController@placeList')->name('place-list');

Route::get('/add/place','Admin\PlaceController@addPlace')->name('add-get-place');
Route::post('/add/place','Admin\PlaceController@createPlace')->name('add-post-place');

Route::get('/delete/place/{place_id}','Admin\PlaceController@deletePlace')->name('delete.place');

Route::get('/edit/place/{place_id}','Admin\PlaceController@editPlace')->name('edit-get-place');
Route::post('/edit/place/{place_id}','Admin\PlaceController@updatePlace')->name('edit-post-place');
//end place route

//start helpprofessors route
Route::get('/helpprofessor-list','HelpprofessorController@helpprofessorlist')->name('helpprofessor-list');
//start helpprofessors route





//////////////////////student CMS

Route::get('/student-master','Student\DashboardController@dashboard')->name('student-masterpage');

Route::get('/profile-student','Student\ProfileController@editStudent')->name('profile-student');
Route::post('/profile-student','Student\ProfileController@updateUser')->name('edit-user');
Route::get('/profile-student','Student\ProfileController@profileStudent')->name('profile-student');

Route::get('/darkhast-karvarzi','Student\Karvarzi_darkhastController@karvarzi')->name('darkhast-karvarzi');

Route::get('/sabtshodeh-karvarzi','Student\Sabt_shodehController@sabt')->name('sabtshode-karvarzi');

Route::get('/report-karvarzi','Student\ReportController@report')->name('report');
Route::get('/gheibat-karvarzi','Student\GheibatController@list')->name('gheibatha');
