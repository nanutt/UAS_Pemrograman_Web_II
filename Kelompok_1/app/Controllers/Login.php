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
        $data = $model->get_data($nama, $password);
        if (empty($nama) || empty($password)) {
            $session->setFlashdata('msg', 'Harap lengkapi semua kolom');
            return redirect()->to('/login');
        }
        if ($data) {
            $ses_data = [
                'nama' => $data['nama'],
                'password' => $data['password'],
                'logged_in' => TRUE
            ];
            $session->set($ses_data);
            return view('dashboard');
        } else {
            $session->setFlashdata('msg', 'Username, Email, atau Password Salah');
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
?>




