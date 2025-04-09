<?php

namespace App\Controllers;

class Quiz extends BaseController
{
    public function index()
    {
        return view('screen/quiz');
    }

    public function detail($slug)
    {
        $data['title'] = ucwords(str_replace(['-', '_'], ' ', $slug));
        return view('quiz_detail', $data);
    }
}
