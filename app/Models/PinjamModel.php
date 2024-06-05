<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model
{
    protected $table = 'peminjaman';
    //protected $primaryKey = 'no_pinjam';
    protected $allowedFields = [
        'no_pinjam', 'tgl_pinjam', 'id_buku', 'id_anggota',
        'jml_pinjam'
    ];

    public function getPinjam($nopinjam = false)
    {
        if ($nopinjam == false) {
            return $this->findAll();
        }

        return $this->where(['no_pinjam' => $nopinjam])->first();
    }
}

