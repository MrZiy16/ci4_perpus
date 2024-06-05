<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class='container'>
    <div class='row'>
        <div class="col">
            <h3>Daftar Pengembalian Buku</h3>
            <hr>
            <a href="/kembali/tambah" class="btn btn-primary">Tambah Data Pengembalian</a>
            <a href="/kembali/cetak" class="btn btn-success"><i class="fa-solid fa-print"></i>Cetak Data</a>
            <a href="/kembali/delete" class="btn btn-danger"><i class="fa-solid fa-print"></i>Hapus Data</a>
            <!-- flashdata dengan alert -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
         <!-- flashdata jika melebihi stok awal -->
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <table class="table table-bordered table-hover mt-3" style="background-color:#6c757d; color: black;">
                <thead class="thread-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Buku Kembali</th>
                        <th scope="col">Tgl Kembali</th>
                        <th scope="col">Id Buku</th>
                        <th scope="col">Id Anggota</th>
                        <th scope="col">Jumlah Buku</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($kembali as $k) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['no_kembali'] ?></td>
                            <td><?= $k['tgl_kembali'] ?></td>
                            <td><?= $k['id_buku'] ?></td>
                            <td><?= $k['id_anggota'] ?></td>
                            <td><?= $k['jml_pinjam'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>