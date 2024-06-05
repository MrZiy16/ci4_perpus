<?= $this->extend('/template'); ?>
<?= $this->section('content');  ?>
<div class="container">
    <div class = row>
        <div class= col>
         <h3 class= text-center>Daftar Anggota</h3>
         <hr>
         <a href="/anggota/tambah" class="btn btn-primary mb-2">Daftar Anggota</a>
         <table class="table table-bordered table-hover mt-3" style="background-color:#6c757d; color: black;">
            <thead class="thread-dark">
                <tr>
                    <th scope=col>NO</th>
                    <th scode=col>Id Anggota</th>
                    <th scope=col>Nama</th>
                    <th scope=col>Alamat</th>
                    <th scope=col>Nomor Telpon</th>
                    <th scope=col>Aksi</th>
                </tr>
            </thead>
       <tbody>
    <?php
     $i = 1 + (6 * ($currentPage - 1));
   foreach ($anggota as $a) :
    ?>
    <tr>
               <th scope=row><?= $i++; ?></th>
               <td><b><?= $a['id_anggotA'];?></b></td>
               <td><b><?= $a['name_anggota'];?></b></td>
               <td><b><?= $a['alamat_anggota'];?></b></td>
               <td><b><?= $a['nomor_anggota'];?></b></td>
               <td><a href="/anggota/ubah/<?= $a['id_anggotA']; ?>" class="btn btn-primary">Edit</a></td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $a['id_anggotA']; ?>">Hapus</button>
                            <td>
                                <div class="modal fade" id="exampleModal<?= $a['id_anggotA']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">KONFIRMASI</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Anda yakin ingin menghapus data ini? Data Anda akan Hilang!!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <form action="/anggota/hapus/<?= $a['id_anggotA']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<?= $pager->links('anggota_perpus','anggota_pagination'); ?>
</div>
</div>
</div>
<?= $this->endSection();?>