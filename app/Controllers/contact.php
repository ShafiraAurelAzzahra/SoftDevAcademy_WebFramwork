<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('screen/contact');
    }

    public function send()
    {
        $email = \Config\Services::email();

        $name = $this->request->getPost('name');
        $userEmail = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        $email->setFrom($userEmail, $name);
        $email->setTo('admin@softdevacademy.com'); // Ganti dengan email admin

        $email->setSubject('Pesan dari Formulir Kontak');
        $email->setMessage($message);

        if ($email->send()) {
            return redirect()->to('/contact')->with('success', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->to('/contact')->with('error', 'Gagal mengirim pesan. Coba lagi.');
        }
    }
}
