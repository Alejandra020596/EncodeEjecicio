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
    return view('index');
});

Route::get('schoolIndex','SchoolController@index')->name('school.schoolIndex');
Route::post('schoolIndexD/{id}','SchoolController@destroy')->name('school.schoolIndexD');
Route::get('school','SchoolController@formEscuela')->name('school.formEscuela');
Route::post('school/insertaEscuela','SchoolController@insertaEscuela')->name('school.insertaEscuela');
Route::get('schoolEd/{id}/edit','SchoolController@edit')->name('school.edit');
Route::post('school/UpdateEscuela/{id}','SchoolController@update')->name('school.UpdateEscuela');


Route::get('teacher','UsersController@formTeacher')->name('teacher.teacherForm');
Route::post('teacher/insertaTeacher','UsersController@insertaTeacher')->name('teacher.insertaTeacher');
Route::get('teacherIndex','UsersController@indexT')->name('teacher.teacherIndex');
Route::get('teacherEd/{id}/edit','UsersController@edit')->name('teacher.edit');
Route::post('teacher/Updateteacher/{id}','UsersController@update')->name('teacher.Updateteacher');
Route::post('teacherIndexD/{id}','UsersController@destroy')->name('teacher.teacherIndexD');


Route::get('materia','MateriaController@formmateria')->name('materia.materiaForm');
Route::post('materia/insertamateria','MateriaController@insertamateria')->name('materia.insertamateria');
Route::get('materiaIndex','MateriaController@index')->name('materia.materiaIndex');
Route::get('materiaEd/{id}/edit','MateriaController@edit')->name('materia.edit');
Route::post('materia/Updatemateria/{id}','MateriaController@update')->name('materia.Updatemateria');
Route::post('materiaIndexD/{id}','MateriaController@destroy')->name('materia.teacherIndexD');



Route::get('temario','temarioController@formtemario')->name('temario.temarioForm');
Route::post('temario/insertatemario','temarioController@insertatemario')->name('temario.insertatemario');
Route::get('temarioIndex','temarioController@index')->name('temario.temarioIndex');
Route::get('temarioEd/{id}/edit','temarioController@edit')->name('temario.edit');
Route::post('temario/Updatetemario/{id}','temarioController@update')->name('temario.Updatetemario');
Route::post('temarioIndexD/{id}','temarioController@destroy')->name('temario.teacherIndexD');


