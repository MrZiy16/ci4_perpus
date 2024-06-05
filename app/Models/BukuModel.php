<?php
namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table ='Buku';
    protected $primaryKey ='id_buku';
    protected $allowedFields=['judul','pengarang','penerbit',
    'tahun_terbit','stok_awal','stok_buku','sampul'];

    public function getBuku($id_buku=false)
    {
        if($id_buku == false)
        {
            return $this->findAll();
        }
        return $this->where(['id_buku'=> $id_buku])->first();
    }
}
?>