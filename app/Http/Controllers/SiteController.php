<?php

    namespace App\Http\Controllers;

    use App\Contracts\CurrencyServiceInterface;
    use App\Models\Category;
    use App\Models\Image;
    use App\Models\Product;
    use App\Services\CurrentService;
    use Illuminate\Http\Request;

    class SiteController extends Controller
    {
        public function index(CurrencyServiceInterface $currentService)
        {
//            $product = Product::find(1);
//            $product->newPrice = 22222;
//            $product->save();


            $categories = Category::query()
                ->where('parent_id', 4)
                ->get();

            return view('site.index', compact('categories'));
        }
    }
