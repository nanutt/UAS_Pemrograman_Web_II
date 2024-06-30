<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AkunModel;

class Register extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('registerft');
    }

    public function save()
    {
        helper(['form']);
        $model = new AkunModel();
        
        $data = [
            'nama'          => $this->request->getPost('nama'),
            'no_hanphone'   => $this->request->getPost('no_hanphone'),
            'email'         => $this->request->getPost('email'),
            'masuk_sebagai' => $this->request->getPost('masuk_sebagai'),
            'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        if ($model->save($data)) {
            return redirect()->to('/login');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }
}
