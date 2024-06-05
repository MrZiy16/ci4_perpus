<?= $this-> extend('/template'); ?>
<?= $this-> section('content'); ?>
<div class="container">
    <div class="col">
        <h3 class="text-center">Form Tambah Buku</h3>
        <hr>
        <form action="/buku/simpan" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mb-3">
         <label for="judul" class="col-sm-2 col-form-label">Judul</label>
         <div class="col-sm-6">
            <input type="text" class="form-control <?= array_key_exists('judul',$error) ? 'is-invalid' :'';?>" id="judul"  name="judul"value="<?= set_value('judul');?>">
            <div id="judulFeedback" class="invalid-feedback">
             <?= array_key_exists('judul',$error) ? $error['judul'] :''; ?>
            </div>
         </div>
        </div>
        <div class="row mb-3">
            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
            <div class="col-sm-6">
             <input type="text" class="form-control" id="pengarang" name="pengarang">
            </div>
        </div>
        <div class="row mb-3">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-6">
             <input type="text" class=form-control id="penerbit" name="penerbit">
            </div>
        </div>
        <div class="row mb-3">
            <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun terbit</label>
            <div class="col-sm-6">
             <input type="text" class=form-control id="tahun_terbit" name="tahun_terbit">
            </div>
        </div>
        <div class="row mb-3">
            <label for="stok_awal" class="col-sm-2 col-form-label">Stok Awal</label>
            <div class="col-sm-6">
             <input type="text" class=form-control id="stok_awal" name="stok_awal">
            </div>
        </div>
        <div class="row mb-3">
            <label for="stok_buku" class="col-sm-2 col-form-label">Stok Buku</label>
            <div class="col-sm-6">
             <input type="text" class=form-control id="stok_buku" name="stok_buku">
            </div>
        </div>
        <div class="row mb-3">
            <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
            <div class="col-sm-2">
             <img src="/img/default.jpg" class="img-thumbnail 
             img-preview">
            </div>
            <div class="col-sm-6">
                <div class="custom-file">
                <input type="file" class="custom-file-input <?= array_key_exists('sampul',$error) ? 'is-invalid' :'';?>" id="sampul" name="sampul" onchange="previewImg()">
                   <div id="sampulFeedback" class="invalid-feedback">
                    <?= array_key_exists('sampul',$error) ? $error['sampul']:''; ?>
                   </div>
                </div>
            
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        <small class="text-muted">
                <a href="/buku" class="btn-link">Kembali</a>
            </small>
     <style>
        .btn-link {
        display: inline-block;
        padding: 9px 10px;
        background-color: #007bff;
        color: #fff;
        border-radius: 4px;
        }

       .btn-link:hover {
        background-color: #0056b3;
        }
      </style>
        </form>
    </div>
</div>
<?=$this->endSection(); ?>