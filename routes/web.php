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
Route::get('/Cursos', function () {
    return view('cursos');
});
Route::get('/Casaeduca', function () {
    return view('casaeduca');
});
Route::get('/Blog', function () {
    return view('blog');
});
Route::get('/Planacademico', function () {
    return view('planacademico');
});
Route::get('/Contacto', function () {
    return view('contacto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verificarCuenta', 'HomeController@verificarCuenta')->name('verificarCuenta');
Route::get('/Administrador', 'AdminController@admin')->name('admin');
Route::get('/Alumno', 'AlumnoController@alumno')->name('alumno');

//Suscipcion
Route::get('/suscribete', 'SuscripcionController@suscribirse')->name('suscribete'); //Pantalla Suscripción
Route::post('/renovarSuscripcion' , 'SuscripcionController@renovarSuscripción');
Route::post('/crearSuscipcion' , 'SuscripcionController@crearSuscipcion');

//Asignatura
Route::get('/Asignatura/{id}', 'AsignaturaController@asignatura');

//Clase
Route::get('/CargarClase/{idClase}', 'ClaseController@clase');
