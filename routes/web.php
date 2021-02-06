<?php

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
    return view('auth.login');
});

Route::resource('peliculas','app\Http\Controllers\PeliculaController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(['middleware' => 'auth'], function () {
    Route::resource(name:'tasks', controller:\App\Http\Controllers\TasksController::class);

    Route::resource(name:'users', controller:\App\Http\Controllers\UsersController::class);
});

