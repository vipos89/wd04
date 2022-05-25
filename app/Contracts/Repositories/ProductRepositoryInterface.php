<?php


    namespace App\Contracts\Repositories;


    interface ProductRepositoryInterface
    {
        public function getById(int $id);

        public function getAll();

        public function getProductFromCategoryById(int $productId, int $categoryId);

        public function getProductsFromCategory( int $categoryId);

    }