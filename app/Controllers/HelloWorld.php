<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HelloWorld extends Controller
{
    public function index()
    {
        return view('hello_world');
    }
}
