<?php

namespace App\Controllers;
use App\Models\BukuModel;
class Buku extends BaseController
{
    protected $helpers=['form'];
    protected $BukuModel;
    public function __construct()
    {
        $this->BukuModel = new BukuModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_buku')?
         $this->request->getVar('page_buku') : 1; 

       $data =[
        'judul' => 'Daftar Buku',
        'buku'=> $this->BukuModel->paginate(6,'buku'),
        'pager'=> $this->BukuModel->pager,
        'currentPage'=> $currentPage
       ];
       return view('buku/index',$data);
    }

    public function detail($id_buku)
    {
        $data =[
            'judul' => 'Detail Buku',
            'buku'=> $this->BukuModel->getBuku($id_buku)
        ];
        return view('Buku/detail',$data);
    }
    
    public function tambah()
    {
        //mengambil data input saat melakukan validasi
        session();
        $data = [
            'judul' => 'Tambah Buku',
            'error' =>$this->validator==null ? [] : $this->validator->getErrors()
        ];

        return view('buku/tambah',$data);
    }
    
    public function simpan()
    {
         //validasi input data
         if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[buku.judul]',
                'errors' => [
                    'required' => '{field} buku wajib di isi',
                    'is_unique' => '{field} buku sudah ada'

                ]
               
            ],
            'sampul'=>[
                'rules'=> 'uploaded[sampul]|max_size[sampul,2024]|is_image[sampul]|mime_in[sampul,image/jpg,image/png,image/jpeg]',
                'errors'=>[
                    'uploaded'=>'pilihlah gambar untuk sampul buku',
                    'max_size'=>'Ukuran gambarnya terlalu besar',
                    'is_image'=>'Ini tidak termasuk jenis file gambar',
                    'mime_in'=>'Jenis file gambarnya wajib: JPG/JPEG/PNG'
                ]
            ]
        ])) {
            //menampilkan pesan kesalahan
            $data = [
                'judul' => 'Tambah Buku',
                'error' => $this->validator->getErrors()
            ];
            return view('buku/tambah', $data);
        }
        //mengambil gambar sampul
        $fileSampul = $this->request->getFile('sampul');

        //generate nama sampul
        $namaSampul = $fileSampul->getRandomName();

        //memindahkan file sampul ke folder img
        $fileSampul->move('img',$namaSampul);

        $this->BukuModel->save([
      'judul'=> $this->request->getVar('judul'),
      'pengarang'=> $this->request->getVar('pengarang'),
      'penerbit'=> $this->request->getVar('penerbit'),
      'tahun_terbit'=> $this->request->getVar('tahun_terbit'),
      'stok_awal'=> $this->request->getVar('stok_awal'),
      'stok_buku'=> $this->request->getVar('stok_buku'),
      'sampul'=> $namaSampul
        ]);
        //flashdata pesan disimpan
        session()->setFlashdata('pesan','Data Sudah Berhasil Ditambahkan');
        
        return redirect()->to("/buku");
   }
   public function hapus($id_buku)
   {
       //cari gambar berdasarkan id
       $buku = $this->BukuModel->find($id_buku);
       
       //cek gambar default (tidak boleh dihapus)
       if($buku['sampul'] != 'default.jpg'){

        //hapus gambar di folder img
       
       }

       $this->BukuModel->delete($id_buku);
       //flashdata pesan dihapus 
       session()->setFlashdata('pesan', 'Data Anda Sudah Hilang!');

       return redirect()->to("/buku");
   }

   public function ubah($id_buku)
   {
       //mengambil data input saat melakukan validasi
       session();
       $data = [
           'judul' => 'Ubah Data Buku',
           'validation'=> \Config\Services::validation(),
           'buku' => $this->BukuModel->getBuku($id_buku)
       ];

       return view('buku/ubah', $data);
   }

   public function update($id_buku)
   {
       $this->BukuModel->update($id_buku, [
           'judul' => $this->request->getVar('judul'),
           'pengarang' => $this->request->getVar('pengarang'),
           'penerbit' => $this->request->getVar('penerbit'),
           'tahun_terbit' => $this->request->getVar('tahun_terbit'),
           'stok_awal' => $this->request->getVar('stok_awal'),
           'stok_buku'=> $this->request->getVar('stok_buku'),
           'sampul' => $this->request->getVar('sampul')
       ]);
       //flashdata pesan disimpan
       session()->setFlashdata('pesan', 'Data Sudah Berhasil Di Rubah Ya!');

       return redirect()->to('/buku');
   }
  
}
?>