<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\CurrencyServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Middleware\FirstMiddleware;
use App\Models\User;
use App\Services\CurrentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(CurrencyServiceInterface $currentService){

        return view('admin.main');
    }
}
