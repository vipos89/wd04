<?php


    namespace App\Services;


    use App\Contracts\CurrencyServiceInterface;

    class CurrentService implements CurrencyServiceInterface
    {
        public function convert($from, $to, $count){
            dd($from, $to, $count);
        }
        public function getCurrency($currency){
            dd($currency);
        }


    }