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

Route::get('/SGECECST', function () {
    return view('welcome');
});


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gestion', 'HomeController@index')->name('gestion');

	Auth::routes();
	Auth::routes();

Route::group(['middleware' => 'auth'], function() {
Route::resource('docentes','DocentesController');
Route::resource('grados','GradosController');
Route::resource('alumnos','AlumnosController');
Route::get('notas/materia/{id}/trimestre/{id_trimestre}', 'NotasController@notasGrado' )->name('notas.por_materia');
Route::post('notas/materia/{id}/trimestre/{id_trimestre}', 'NotasController@bulk' )->name('notas.bulk');
Route::get('notas/conducta/trimestre/{id_trimestre}', 'NotasController@notasConducta' )->name('notas.conductas');
Route::post('notas/conducta/trimestre/{id_trimestre}', 'NotasController@cond' )->name('notas.cond');
Route::resource('secretarias','SecretariasController');
Route::resource('materias','MateriasController');
Route::resource('notas','NotasController');
Route::resource('asignacionAlumnosNotas','AsignacionAlumnosNotasController');

Route::resource('asignaciones','AsignacionesController');
Route::resource('asignacionNotas','asignacionNotasController');

Route::get('asignacionAlumnosNotas/aprobar/reprobar', 'AsignacionAlumnosNotasController@apro_repro' )->name('asignacionAlumnosNotas.aprobar_reprobar');
Route::post('asignacionAlumnosNotas/aprobar/reprobar', 'AsignacionAlumnosNotasController@calc_aprobacion' )->name('asignacionAlumnosNotas.calc_aprobacion');

Route::get('asignacionAlumnosNotas/reasignar/{id}', 'AsignacionAlumnosNotasController@reasig' )->name('asignacionAlumnosNotas.reasignar');

Route::get('asignacionNotas/reporte1/{id}', 'AsignacionNotasController@repor1' )->name('asignacionNotas.reporte1');
Route::get('asignacionNotas/reporte1PDF/{id}', 'AsignacionNotasController@repor1PDF' )->name('asignacionNotas.reporte1PDF');
Route::get('asignacionNotas/reporte2/{id}', 'AsignacionNotasController@repor2' )->name('asignacionNotas.reporte2');
Route::get('asignacionNotas/reporte3/{id}', 'AsignacionNotasController@repor3' )->name('asignacionNotas.reporte3');
Route::get('asignacionNotas/reporte123/{id}', 'AsignacionNotasController@repor123' )->name('asignacionNotas.reporte123');

Route::get('/notas/aprobar/reprobar', 'NotasController@apro_repro' )->name('notas.aprobar_reprobar');

Route::get('gestion', function()
	{
    return view('gestion');
	});

Route::post('asignacionAlumnosNotas/{id}', 'AsignacionAlumnosNotasController@deleted' )->name('asignacionAlumnosNotas.deleted');

});
