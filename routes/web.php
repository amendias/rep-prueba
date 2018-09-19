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

Route::get('/materias', 'MateriaController@index');

Route::get('/alumnos', 'AlumnoController@index');
Route::get('/dependencias', 'DependenciaController@index');
Route::get('/empleados', 'EmpleadoController@index');
Route::get('/roles', 'RolController@index');
/*
Route::get('/materias', function () {
    return view('materias.indexMateria');
});
*/
/*
Primer opcion para rutas (no se recomienda)
Route::get('/materias', function (){  return 'Ruta: materias'; });
*/