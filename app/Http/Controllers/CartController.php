<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request){
        $request->session()->all();
        return response($request->input('id'));
    }
}
