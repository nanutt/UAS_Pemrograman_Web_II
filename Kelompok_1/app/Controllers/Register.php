<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AkunModel;

class Register extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('registerft', $data);
    }

    public function save()
    {
        helper(['form']);
        $session = session();
        $model = new AkunModel();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'no_hanphone' => $this->request->getVar('no_hanphone'),
            'email' => $this->request->getVar('email'),
            'masuk_sebagai' => $this->request->getVar('masuk_sebagai'),
            'password' => $this->request->getVar('password'),
            'confpassword' => $this->request->getVar('confpassword'),
        ];

        if ($data['password'] !== $data['confpassword']) {
            $session->setFlashdata('confpassword', 'Konfirmasi password tidak sesuai dengan password.');
            echo view('registerft', $data);
            return;
        }

        unset($data['confpassword']);

        if ($model->save($data)) {
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('registerft', $data);
        }
    }

}
?>