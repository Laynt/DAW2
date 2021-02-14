<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludarController;
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

Route::get('/saludarRuta', function () {
    return view('saludo');
});

Route::get('/saludarControlador', SaludarController::class);

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/saludarConDatos', function () {
    return view('saludocondatos', ['nombre' => 'Victoria']);
});

//Añadiendo la ruta con with
Route::get('/saludarConDatosWith', function () {
    return view('saludocondatos')->with('nombre', 'Victoria Federica');
});


Route::get('/directivasBlade', function () {
    return view('directivas', ['records' => array()]);
});


Route::get('/layoutporherencia', function () {
    return view('child');
});

Route::view('/formulario','formulario');

