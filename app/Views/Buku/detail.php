<?= $this->extend('/template');?>
<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Detail Buku</h3>
            <div class= mb-3 style= max-width: 540px;>
            <div class= "row g-9">
            <div class= col-md-4>
                <img src="/img/<?=$buku['sampul'];?>"
                class ="img-fluid rounded-start" alt="...">
            </div>
            <div class= col-md-8>
                <div class="card-body">
                    <h5 class= card-title ><?=$buku['judul'];?></h5>
                 <p class= "card-text"><b>Pengarang :
                    <?= $buku['pengarang'];?></b></p>
                <p class="card-text"><b>Penerbit :
                    <?= $buku['penerbit'];?></b></p>
                <p class="card-text"><b>Tahun Terbit :
                    <?= $buku['tahun_terbit'];?></p>
                <p class ="card-text"><b>Stok Awal :
                    <?= $buku['stok_awal'];?></b></p>
                 <p class ="card-text"><b>Stok Buku :
                    <?= $buku['stok_buku'];?></b></p>
               <a href="/buku/ubah/<?=$buku['id_buku'];?>"
                class="btn btn-warning">Ubah</a>
               <form action="/buku/hapus/<?= $buku['id_buku']; ?>" method="post" class="d-inline">
               <?= csrf_field(); ?>
               <input type="hidden" name="_method" value="DELETE">
               <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data Ini !!!!')">Hapus</button>
               </form>
               <br>
               <small class="text-muted">
                <a href="/buku" class="btn-link">Kembali</a>
            </small>
     <style>
        .btn-link {
        display: inline-block;
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border-radius: 4px;
        }

       .btn-link:hover {
        background-color: #0056b3;
        }
      </style>
               </br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?=$this->endsection();?>
