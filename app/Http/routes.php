<?php

Route::get('/','UniversitysController@index');

Route::get('/university/{Uni}','UniversitysController@show');

Route::get('/cursos/{curso}','CursoController@index');

Route::get('/solicitar/{curso}','CursoController@indexS');

Route::post('/cursos/{curso}/inscribir','CursoController@inscribir');

Route::post('/cursos/{curso}/solicitar','CursoController@solicitar');


 

Route::group(['middleware' => 'web'], function () {
Route::auth();

Route::get('/admin', 'HomeController@index');

Route::get('/admin/alumnos','AdminController@Alumnos');

Route::get('/admin/alumnos/borrar/{idAlumno}','AdminController@AlumnosDelete');

Route::get('/admin/alumnos/{estado}','AdminController@AlumnosMostrar');

Route::get('/admin/cursos','AdminController@Cursos');

Route::get('/admin/cursos/{Uni}','AdminController@CursosShow');

Route::get('/admin/cursos/update/{idCurso}','AdminController@UpdateShow');

Route::post('/admin/cursos/update/{idCurso}/edit','AdminController@CursosUpdate');

Route::post('/admin/cursos/{Uni}/agregar','AdminController@CursoAgregar');

Route::get('/admin/cursos/borrar/{idCurso}','AdminController@CursoBorrar');

Route::post('/admin/verification','AdminController@verification');
});
