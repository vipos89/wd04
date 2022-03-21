<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myPage(){
       return view('folder1.folder2.myPage');
    }
}
