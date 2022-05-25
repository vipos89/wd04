<?php

namespace App\Providers;

use App\Contracts\CurrencyServiceInterface;
use App\Contracts\Repositories\ProductRepositoryInterface;
use App\Repositories\MongoProductRepository;
use App\Repositories\ProductRepository;
use App\Services\CurrentService;
use App\Services\PriorCurrency;
use Illuminate\Support\ServiceProvider;

class MyProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app
            ->singleton(CurrencyServiceInterface::class, PriorCurrency::class);
        $this->app->bind(ProductRepositoryInterface::class, MongoProductRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(CurrencyServiceInterface $service)
    {
        view()->share('currency', 100);

    }
}
