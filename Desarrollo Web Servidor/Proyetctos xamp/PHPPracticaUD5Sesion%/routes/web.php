<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestRequestController;
use Illuminate\Http\Request;
use App\Http\Controllers\TestSessionController;
use App\Http\Controllers\Microblogging\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testRequestEnRuta', function (Request $request) {
    
});
 
Route::get('/testRequestEnControlador',  [TestRequestController::class, 'index']);

Route::get('/home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});

Route::get('/testEscribirDatosDeSesion',  [TestSessionController::class, 'escribirDatosDeSesion']);
Route::get('/testLeerDatosDeSesion',  [TestSessionController::class, 'leerDatosDeSesion']);

Route::get('/testCrearCookie', function () {
    $minutes = 2;
return response('Creando una cookie')->withCookie(cookie('cookie_dws', 'en clase de Laravel', $minutes)); //cookie(nombre, descripcion, duracion de la cookie)
});


Route::get('/testLeerCookie', function (Request $request) {
    $value = $request->cookie('cookie_dws');    
    return response("La cookie contiene: $value");
});

Route::get('/microblogging',  [PostController::class,'index']);
Route::post('/microblogging',  [PostController::class,'store']);

