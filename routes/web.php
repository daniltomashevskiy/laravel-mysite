<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [MainController::class, 'home']);
Route::get('/categories', [MainController::class, 'categories']);
Route::get('/chairs', [MainController::class, 'chairs']);
Route::get('/chair__white', [MainController::class, 'chair__white']);



/*Route::get('/', function () {
    return view('index');
});*/