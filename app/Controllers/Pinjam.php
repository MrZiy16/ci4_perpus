<?php

namespace App\Controllers;

use App\Models\PinjamModel;
use App\Models\BukuModel;
use App\Models\AnggotaModel;

class Pinjam extends BaseController
{
    protected $PinjamModel;
    protected $BukuModel;
    protected $AnggotaModel;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->PinjamModel = new PinjamModel();
        $this->BukuModel = new BukuModel();
        $this->AnggotaModel= new AnggotaModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Daftar Pinjam',
            'pinjam' => $this->PinjamModel->getPinjam(),
        ];
        return view('pinjam/index', $data);
    }

    public function tambah()
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'judul' => 'Tambah Pinjam',
            'error' => $this->validator == null ? [] : $this->validator->getErrors(),
            'Buku' => $this->BukuModel->findAll(),
            'anggota' =>$this->AnggotaModel->findAll()
        ];
        return view('pinjam/tambah', $data);
    }

    public function simpan()
    {
        $idBuku = $this->request->getVar('id_buku');
        $buku = $this->BukuModel->getBuku($idBuku);
    
        // Periksa apakah stok mencukupi
        $jmlPinjam = $this->request->getVar('jml_pinjam');
        if ($buku['stok_buku'] < $jmlPinjam) {
            // Jika stok kurang dari jumlah yang dipinjam, set flashdata
            session()->setFlashdata('error', 'Stok tidak mencukupi. Peminjaman tidak dapat dilakukan.');
            return redirect()->to('/pinjam/tambah');
        }
        //validasi input data

        $this->PinjamModel->insert([
            'no_pinjam' => $this->request->getVar('no_pinjam'),
            'tgl_pinjam' => $this->request->getVar('tgl_pinjam'),
            'id_buku' => $this->request->getVar('id_buku'),
            'id_anggota' => $this->request->getVar('id_anggota'),
            'jml_pinjam' => $this->request->getVar('jml_pinjam'),
        ]);

        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Data Sudah Berhasil Ditambahkan');
        
        return redirect()->to('/pinjam');
        
    }
    public function delete()
    {
        $nopinjam = new PinjamModel();
        $nopinjam->emptyTable(); 
        
        session()->setFlashdata('pesan','Data Sudah Berhasil Dihapus');
        
        return redirect()->to('/pinjam');
    }

    public function cetak()
    {
        $data = [
            'pinjam' => $this->PinjamModel->getPinjam(),
        ];

        $view = view('pinjam/cetak', $data);

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($view);
        $mpdf->output('Laporan Data Pinjam.pdf', 'D');
    }

}