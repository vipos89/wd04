<?php


    namespace App\Services;


    use App\Contracts\CurrencyServiceInterface;
    use Psr\Log\LoggerInterface;

    class PriorCurrency implements CurrencyServiceInterface
    {

        public function convert(string $from, string $to, int $count)
        {
            // TODO: Implement convert() method.
        }

        public function getCurrency(string $currency)
        {
            dd($currency);
        }
    }