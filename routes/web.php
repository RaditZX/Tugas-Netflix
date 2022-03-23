<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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




Route::get('/list',[FilmController::class,'index']);
Route::get('/add',[FilmController::class,'create']);
Route::get('/detail/{id}',[FilmController::class,'show']);
Route::get('/delete/{id}',[FilmController::class,'destroy']);
Route::get('/edit/{id}',[FilmController::class,'edit']);
Route::resource('film',FilmController::class);



require __DIR__.'/auth.php';
