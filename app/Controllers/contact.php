<?php

namespace App\Controllers;

use App\Models\MessageModel;
use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send()
    {
        helper(['form']);

        $rules = [
            'name'    => 'required|min_length[3]',
            'email'   => 'required|valid_email',
            'message' => 'required|min_length[5]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $messageModel = new MessageModel();
        $messageModel->save([
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
