<?php

namespace App\Controllers;

use App\Models\KembaliModel;
use App\Models\BukuModel;
use App\Models\AnggotaModel;

class Kembali extends BaseController
{
    protected $KembaliModel;
    protected $BukuModel;
    protected $AnggotaModel;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->KembaliModel = new KembaliModel();
        $this->BukuModel = new BukuModel();
        $this->AnggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Daftar Buku',
            'kembali' => $this->KembaliModel->getKembali(),
        ];
        return view('kembali/index', $data);
    }

    public function tambah()
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'judul' => 'Tambah Buku',
            'error' => $this->validator == null ? [] : $this->validator->getErrors(),
            'Buku' => $this->BukuModel->findAll(),
            'anggota' =>$this->AnggotaModel->findAll()
        ];
        return view('kembali/tambah', $data);
    }

    public function simpan()
    {
        $idBuku = $this->request->getVar('id_buku');
        $buku = $this->BukuModel->getBuku($idBuku);
    
        // Periksa apakah stok mencukupi
        $jmlPinjam = $this->request->getVar('jml_pinjam');
        if ($buku['stok_awal'] < $buku['stok_buku'] + $jmlPinjam) {
            // Jika stok kurang dari jumlah yang dipinjam, set flashdata
            session()->setFlashdata('error', 'Stok Melebihi atau Kosong, Peminjaman tidak dapat dilakukan!');
            return redirect()->to('/kembali/tambah');
        }
        //validasi input data

        $this->KembaliModel->insert([
            'no_kembali' => $this->request->getVar('no_kembali'),
            'tgl_kembali' => $this->request->getVar('tgl_kembali'),
            'id_buku' => $this->request->getVar('id_buku'),
            'id_anggota' => $this->request->getVar('id_anggota'),
            'jml_pinjam' => $this->request->getVar('jml_pinjam'),
        ]);

        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Data Sudah Berhasil Ditambahkan');
        return redirect()->to('/kembali'); 
   }

   public function delete()
    {
        $kpinjam = new KembaliModel();
        $kpinjam->emptyTable(); 
        
        return redirect()->to('/kembali')->with('success', 'Semua data telah dihapus.');
    }


    public function cetak()
    {
        $data = [
            'kembali' => $this->KembaliModel->getKembali(),
        ];

        $view = view('kembali/cetak', $data);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($view);
        $mpdf->output('Laporan Data Pengembalian.pdf', 'D');
    }
}
