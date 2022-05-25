<?php


    namespace App\Contracts;


    interface CurrencyServiceInterface
    {
        public function convert(string $from, string $to, int $count);

        public function getCurrency(string $currency);

    }