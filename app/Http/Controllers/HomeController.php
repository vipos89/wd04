<?php

namespace App\Http\Controllers;

use App\Contracts\CurrencyServiceInterface;
use App\Services\CurrentService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CurrencyServiceInterface $currentService)
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
