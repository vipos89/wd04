<?php

    use App\Http\Controllers\CartController;
    use App\Http\Controllers\CatalogController;
    use App\Http\Controllers\SiteController;
    use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

Route::get('/', [SiteController::class, 'index']);
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');

Route::post('/add-to-cart', [CartController::class, 'add']);


Route::get('test', function (Illuminate\Http\Request $request){
   // $request->session()->put('_token2222', 'dsfsdfsdfsdf');
        dump($request->session()->all());
});



Auth::routes();
//Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
//
//Route::get('login', [\App\Http\Controllers\AuthController::class, 'login']);
//Route::post('auth', [\App\Http\Controllers\AuthController::class, 'auth']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->middleware('role:admin')->name('admin.')->group(function (){


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
