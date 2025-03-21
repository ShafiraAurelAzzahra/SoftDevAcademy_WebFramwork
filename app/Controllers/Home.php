<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home'); // Memuat file home.php dari app/Views/
    }
}
