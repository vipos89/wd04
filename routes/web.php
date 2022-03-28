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

Route::get('ololo', [\App\Http\Controllers\MyController::class, 'ololo']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('my-first-page', [\App\Http\Controllers\MyController::class, 'myPage']);

//Auth::routes();
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('auth', [\App\Http\Controllers\AuthController::class, 'auth']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
