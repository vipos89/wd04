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

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);



Auth::routes();
//Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
//
//Route::get('login', [\App\Http\Controllers\AuthController::class, 'login']);
//Route::post('auth', [\App\Http\Controllers\AuthController::class, 'auth']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->name('admin.')->group(function (){


    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'dashboard']);
    //Route::get('article/{article}', [\App\Http\Controllers\Admin\ArticleController::class, 'edit']);

    Route::resource('article', \App\Http\Controllers\Admin\ArticleController::class);
    Route::resource('country', \App\Http\Controllers\Admin\CountryController::class);
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);


});

//Route::fallback(function () {
//        dd(111);
//});



//Route::resource('admin/articles', \App\Http\Controllers\Admin\ArticleController::class);
//Route::resources([
//    'country'=> \App\Http\Controllers\Admin\CountryController::class,
//    'article' => \App\Http\Controllers\Admin\ArticleController::class
//                 ]);
