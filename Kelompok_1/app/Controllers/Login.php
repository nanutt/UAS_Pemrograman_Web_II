<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AkunModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('loginft');
    }

    public function auth()
    {
        $session = session();
        $model = new AkunModel();
        $nama = $this->request->getPost('nama');
        $password = $this->request->getPost('password');
        $data = $model->get_data($nama);

        if ($data) {
            if (password_verify($password, $data['password'])) {
                $ses_data = [
                    'id_akun'   => $data['id_akun'],
                    'nama'      => $data['nama'],
                    'email'     => $data['email'],
                    'logged_in' => true
                ];
                $session->set($ses_data);
                return view('dashboard');
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Nama tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
