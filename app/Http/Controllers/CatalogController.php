<?php

namespace App\Http\Controllers;

use App\Contracts\CurrencyServiceInterface;
use App\Contracts\Repositories\ProductRepositoryInterface;
use App\Models\Product;
use App\Services\CurrentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CatalogController extends Controller
{


    private ProductRepositoryInterface $productRepository;
    private CurrencyServiceInterface $currentService;

    public function __construct(CurrencyServiceInterface $currentService, ProductRepositoryInterface $productRepository)
    {
        $this->currentService = $currentService;
        $this->currentService->getCurrency('usd');
        $this->productRepository = $productRepository;

    }

    public function index(){
        $products = $this->productRepository->getAll();
        return response(view('catalog.catalog', compact('products')))
            ->withCookie(cookie('ololo5', json_encode(['ewrewrwer', 'wefwefwefwe'])))
            ;
    }

    public function category($categoryId){
        $products = $this->productRepository->getProductsFromCategory($categoryId);
        return view('catalog.catalog', compact('products'));
    }
}
