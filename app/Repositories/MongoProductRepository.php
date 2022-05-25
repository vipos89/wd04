<?php


    namespace App\Repositories;


    use App\Contracts\Repositories\ProductRepositoryInterface;

    class MongoProductRepository implements ProductRepositoryInterface
    {

        public function getById(int $id)
        {
            // TODO: Implement getById() method.
        }

        public function getAll()
        {
            // TODO: Implement getAll() method.
        }

        public function getProductFromCategoryById(int $productId, int $categoryId)
        {
            // TODO: Implement getProductFromCategoryById() method.
        }

        public function getProductsFromCategory(int $categoryId)
        {
            // TODO: Implement getProductsFromCategory() method.
        }
    }