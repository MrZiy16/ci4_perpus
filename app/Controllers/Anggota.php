<?php

 namespace App\Controllers;

 use App\Models\AnggotaModel;

 class Anggota extends BaseController
 {
    public function __construct()
    {
        $this->AnggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_anggota')?
         $this->request->getVar('page_anggota') : 1; 

        $keyword = $this->request->getVar('keyword');
        if ($keyword)
        {
            $anggota = $this->AnggotaModel->search($keyword);
        }else{
            $anggota = $this->AnggotaModel;
        }

        $data = [
            'judul'=>'Daftar Anggota',
            'anggota'=> $anggota->paginate(6,'anggota_perpus'),
            'pager'=> $this->AnggotaModel->pager,
            'currentPage'=> $currentPage
        ];
        return view('anggota/index', $data);
    }


    public function tambah()
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'judul' => 'Tambah Anggota',
            'error' => $this->validator == null ? [] : $this->validator->getErrors(),
        ];

        return view('anggota/tambah', $data);
    }


    public function simpan()
    {
        if (!$this->validate([
                'id_anggotA'=> 'required|is_unique[anggota_perpus.id_anggotA]'
        ]))
        {
   $validation = \Config\Services::validation();

    return redirect()->to('/anggota')->withInput()
    ->with('validation',$validation);
        }
                
        $this->AnggotaModel->insert([
            'id_anggotA' => $this->request->getVar('id_anggotA'),
            'name_anggota' => $this->request->getVar('name_anggota'),
            'alamat_anggota' => $this->request->getVar('alamat_anggota'),
            'nomor_anggota' =>$this->request->getVar('nomor_anggota')
        ]);
        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Data Sudah Berhasil Ditambahkan');
        return redirect()->to('/anggota');
    }


    public function hapus($id)
    {
        $this->AnggotaModel->delete($id);

        //flashdata pesan dihapus 
        session()->setFlashdata('pesan', 'Data Anda Sudah Hilang!');

        return redirect()->to('/anggota');
    }



    public function ubah($id)
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'judul' => 'Ubah Data Anggota',
            'validation' => \Config\Services::validation(),
            'anggota' => $this->AnggotaModel->getAnggota()[0]
        ];

        return view('anggota/ubah', $data);
    }



    public function update($id)
    {
        $this->AnggotaModel->update($id,[
            'id_anggotA' => $this->request->getVar('id_anggotA'),
            'name_anggota' => $this->request->getVar('name_anggota'),
            'alamat_anggota' => $this->request->getVar('alamat_anggota'),
            'nomor_anggota' =>$this->request->getVar('nomor_anggota')
        ]);
        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Data Sudah Berhasil
    Di Rubah Ya!');
        return redirect()->to('/anggota');
    }
 }