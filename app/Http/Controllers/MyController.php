<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myPage(){
       return view('folder1.folder2.myPage');
    }

    public function ololo(){
        $message = "<h1>Hello 'LARAVEL</h1>";

      return view('my-auth.login', [
          'myMessage' => $message
      ]);
    }
}
