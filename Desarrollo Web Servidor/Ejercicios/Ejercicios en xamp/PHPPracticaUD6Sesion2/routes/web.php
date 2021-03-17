<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/onetoone/index', [UserController::class, 'index']);
Route::get('/onetoone/addusermobile', [UserController::class, 'addUserMobile']);
Route::get('/onetoone/update', [UserController::class, 'update']);
Route::get('/onetoone/delete', [UserController::class, 'delete']);