<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function index()
    {
        return view('screen/homepage'); // Pastikan ini mengarah ke tampilan yang benar
    }
}
