<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{

protected $table = 'anggota_perpus';
protected $primaryKey = 'id_anggotA';
protected $allowedFields = ['id_anggotA','name_anggota','alamat_anggota','nomor_anggota',];

public function search($keyword){
    return $this->table('anggota_perpus')->like('name_anggota',$keyword)
    ->orLike('alamat_anggota',$keyword);
}

public function getAnggota($id = false)
{
    if($id == false){
        return $this->findAll();
    }
    return $this->where(['id_anggotA' => $id])->first();
}
}