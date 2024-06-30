<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AkunModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('registerft', $data);
    }
 
    public function save()
    {        helper(['form']);
         
        $model = new AkunModel();
        $data = [
            'nama'          => $this->request->getVar('nama'),
            'no_hanphone'   => $this->request->getVar('no_hanphone'),
            'email'         => $this->request->getVar('email'),
            'masuk_sebagai' => $this->request->getVar('masuk_sebagai'),
            'password' => $this->request->getVar('password'),
            'confpassword' => $this->request->getVar('confpassword'),
        ];
        
        if ($model->save($data)) {
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('registerft', $data);
        }
         
    }
 
}
?>