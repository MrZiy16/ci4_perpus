<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class='container'>
    <div class='row'>
        <div class="col">
            <h3>Daftar Buku Pinjaman</h3>
            <hr>
            <a href="/pinjam/tambah" class="btn btn-primary">Tambah Pinjam</a>
            <a href="/pinjam/cetak" class="btn btn-success"><i class="fa-solid fa-print"></i>Cetak Data</a>
            <a href="/pinjam/delete" class="btn btn-danger"><i class="fa-solid fa-print"></i>Hapus Data</a>
            <!-- flashdata dengan alert -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <!-- flashdata for stok habis -->
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <table class="table table-bordered table-hover mt-3" style="background-color:#6c757d; color: black;">
                <thead class="thread-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Pinjam</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">Id Buku</th>
                        <th scope="col">Id Anggota</th>
                        <th scope="col">Jumlah Pinjam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($pinjam as $b) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $b['no_pinjam'] ?></td>
                            <td><?= $b['tgl_pinjam'] ?></td>
                            <td><?= $b['id_buku'] ?></td>
                            <td><?= $b['id_anggota'] ?></td>
                            <td><?= $b['jml_pinjam'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>