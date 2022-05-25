<?php

namespace App\Providers;

use App\Contracts\CurrencyServiceInterface;
use App\View\Components\Alert;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(CurrencyServiceInterface $c)
    {

       // $c->getCurrency('eur');
        Blade::component('package-alert', Alert::class);
    }
}
