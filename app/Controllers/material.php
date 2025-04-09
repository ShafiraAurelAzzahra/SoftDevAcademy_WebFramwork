<?php

namespace App\Controllers;

class Material extends BaseController
{
    public function index()
    {
        return view('screen/material');
    }

    public function detail($slug)
    {
        $data['title'] = ucwords(str_replace(['-', '_'], ' ', $slug));
        return view('material_detail', $data);
    }
}
