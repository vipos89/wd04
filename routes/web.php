<?php

    use App\Http\Controllers\CartController;
    use App\Http\Controllers\CatalogController;
    use App\Http\Controllers\SiteController;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\File;
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

    $dirs = array_map(function ($dir){
        return File::name($dir);
    }, File::directories(base_path('resources/lang')));
    dump($dirs);

//    \Illuminate\Support\Facades\App::setLocale('ru');
//    return view('test');
//    $testMail = new \App\Mail\TestMail('Hello text', 2);
//    return $testMail->render();
//
//    for ($i=0; $i<10; $i++){
//
//        \Illuminate\Support\Facades\Mail::to('ololo@mail.ru')
//            ->queue($testMail->onQueue('email'));
//    }
//
//    \Illuminate\Support\Facades\Artisan::call('queue:listen');


//        $user = \App\Models\Product::query()
//            //->selectRaw('price > ? and price < ?', [10, 100])
//            ->selectRaw('price * ? * ? as price_with_tax', [1.0825, 10000])
//            ->get()
//            ->toArray();
//
//        dd($user);$user


//    $page = $request->input('page', 1);
//
//    if (intval($page) % 2 == 0){
//        $message = 'Четное';
//
//    }else{
//        $message = 'no';
//    }
//    $event = new \App\Events\TestEvent($message, 1);
//    event($event);



//    \Illuminate\Support\Facades\Event::dispatch($event);
//   \App\Events\TestEvent::dispatch("Hello world");
});

    Route::get('cart', function (Illuminate\Http\Request $request){
        //$response = ;
        \Illuminate\Support\Facades\Http::get('https://belarusbank.by/api/kursExchange', [
            'city' => 'Брест',
            'cur' => 'USD'
        ]);

        \Illuminate\Support\Facades\Http::asForm()->post('ololo', [
            'name' => 'ololo',
            'price' => 222
        ]);

        //$response = file_get_contents('https://belarusbank.by/api/kursExchange?city=%D0%91%D1%80%D0%B5%D1%81%D1%82');
        //dd(json_decode($response, true));

//        $client = new \GuzzleHttp\Client();
//
//        $client->post( '', [
//            'form_data' => [
//                'name' => 'ewrewrewr',
//                'price' => 22222,
//
//            ]
//        ]);

//        $client = new \GuzzleHttp\Client();
//        $response = $client->get('https://belarusbank.by/api/kursExchange?city=%D0%91%D1%80%D0%B5%D1%81%D1%82');
//
//
//        dump($response->getStatusCode());
//        dd($response->getBody()->getContents());







//       dump( $request->cookie('cook'));
//        //Create a response instance
//        $response = new Illuminate\Http\Response('Hello World');
//
////Call the withCookie() method with the response method
//        ;
//        $response->withCookie(cookie('cook', $request->input('cook')));
//
////return the response
//        return $response;
//       $cart = \Illuminate\Support\Facades\Session::get('cart', []);
//       $ids = array_keys($cart);
//
//       $products = \App\Models\Product::query()
//           ->whereIn('id', $ids)
//           ->get();
//        foreach ($products as $product){
//            dump($product->name. " ". $cart[$product->id]);
//        }
//       dump($products);
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


