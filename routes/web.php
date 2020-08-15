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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verificarCuenta', 'HomeController@verificarCuenta')->name('verificarCuenta');
Route::get('/Administrador', 'AdminController@admin')->name('admin');
// Route::get('/Alumnos', 'AlumnoController@alumno')->name('adminAlumnos');
Route::get('/Profesores', 'AdminController@profesores')->name('adminProfesores');
Route::get('/adminAsignaturas/{idCurso}', 'AdminController@adminAsignaturas')->name('adminAsignaturas');
Route::get('/adminUnidades/{idCurso}', 'AdminController@adminUnidades')->name('adminUnidades');
Route::get('/adminClases/{idCurso}', 'AdminController@adminClases')->name('adminClases');

//Suscipcion
Route::get('/suscribete', 'SuscripcionController@suscribirse')->name('suscribete'); //Pantalla Suscripción
Route::post('/renovarSuscripcion' , 'SuscripcionController@renovarSuscripción');
Route::post('/crearSuscipcion' , 'SuscripcionController@crearSuscipcion');

//Asignatura
Route::get('/Asignatura/{id}', 'AsignaturaController@asignatura');

//Clase
Route::get('/CargarClase/{idClase}', 'ClaseController@clase');
