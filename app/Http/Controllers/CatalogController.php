<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        $products = Product::paginate();
        $products = $products->concat(Product::all())
            ->concat(Product::all())
            ->concat(Product::all())
            ->concat(Product::all())
            ->concat(Product::all())
            ->concat(Product::all())
            ->concat(Product::all())
            ->concat(Product::all())
            ->concat(Product::all());
        return response(view('catalog.catalog', compact('products')))
            ->withCookie(cookie('ololo5', json_encode(['ewrewrwer', 'wefwefwefwe'])))
            ;
    }
}
