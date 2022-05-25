<?php


    namespace App\Repositories;


    use App\Contracts\Repositories\ProductRepositoryInterface;
    use App\Models\Product;

    class ProductRepository implements ProductRepositoryInterface
    {

        public function getById(int $id)
        {
            return Product::query()->findOrFail($id);
        }

        public function getAll()
        {
            $products = Product::all();
            return $products->concat(Product::all());
        }

        public function getProductFromCategoryById(int $productId, int $categoryId)
        {
            return Product::query()
                ->where('id', $productId)
                ->where('category_id', $categoryId)
                ->findOrFail();
        }

        public function getProductsFromCategory(int $categoryId)
        {
            return Product::query()
            ->where('category_id', $categoryId)
            ->get();
        }
    }