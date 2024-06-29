<?php
namespace App\Models;
use CodeIgniter\Model;
class AkunModel extends Model
{
            protected $table = 'akun';
        protected $allowedFields = ['nama','email','no_hanphone', 'masuk_sebagai', 'password'];
    public function get_data($nama, $no_hanphone, $email, $masuk_sebagai, $password)
    {

        return $this->db->table('akun')
        ->where(array('nama' => $nama, 'password' => $password))
        ->get()->getRowArray();
}
}