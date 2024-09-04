<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // This is a controller that is made using command
    // php artisan make:controller DemoController
    // here we write access to hello world

    public function index(){
        return view("hello");
    }

    public function guzzle(){
        return view("guzzle");
    }

}
