<?php

namespace App\Models;

use CodeIgniter\Model;

class KembaliModel extends Model
{
    protected $table = 'kembali';
    //protected $primaryKey = 'no_pinjam';
    protected $allowedFields = [
        'no_kembali', 'tgl_kembali', 'id_buku', 'id_anggota',
        'jml_pinjam'
    ];

    public function getKembali($kpinjam = false)
    {
        if ($kpinjam == false) {
            return $this->findAll();
        }

        return $this->where(['no_kembali' => $kpinjam])->first();
    }
}
