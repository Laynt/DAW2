<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('games/dd', function () {    
    $games = DB::table('games')->get();    
    dd($games);    //Usando la funcion dd para mostrar el contenido de la variable $games
});

Route::get('games/json', function () {    
    $games = DB::table('games')->get();    
    return $games;  
});

Route::get('games/view', function () {    
    $games = DB::table('games')->get();    
    return view('games', ['games' => $games]); 
});

Route::get('games/where', function () {    
    $games = DB::table('games')->where('title','Metroid')->get();
 
    return view('games', ['games' => $games]);
});

Route::get('games', function () {    
    $games = DB::table('games')->latest()->get();    
    return view('games.index', ['games' => $games]);
}); 
Route::get('games/{id}', function ($id) {    
    $game = DB::table('games')->find($id);    
    return view('games.show', ['game' => $game]);
});

Route::resource('products', ProductController::class);



