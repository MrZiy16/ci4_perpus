<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="col">
        <h3 class="text-center">Form Pinjam Buku</h3>
        <hr>

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

        <form action="/pinjam/simpan" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <div class="row mb-3">
                <label for="no_pinjam" class="col-sm-2 col-form-label">Kode Pinjam</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control <?= array_key_exists('no_pinjam', $error) ? 'is-invalid' : ''; ?>" id="no_pinjam" name="no_pinjam" value="<?= set_value('no_pinjam'); ?>">
                    <div id="no_pinjamFeedback" class="invalid-feedback">
                        <?= array_key_exists('no_pinjam', $error) ? $error['no_pinjam'] : ''; ?>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="tgl_pinjam" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                </div>
            </div>

            <div class="row mb-3">
                <label for="id_buku" class="col-sm-2 col-form-label">Id Buku</label>
                <div class="col-sm-6">
                    <select class="form-select" id="id_buku" name="id_buku">
                        <?php foreach ($Buku as $buku) : ?>
                            <option value="<?= $buku['id_buku']; ?>"><?= $buku['id_buku']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="id_anggota" class="col-sm-2 col-form-label">Id Anggota</label>
                <div class="col-sm-6">
                <select class="form-select" id="id_anggota" name="id_anggota">
                        <?php foreach ($anggota as $anggota) : ?>
                            <option value="<?= $anggota['id_anggotA']; ?>"><?= $anggota['id_anggotA']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="jml_pinjam" class="col-sm-2 col-form-label">Jumlah Pinjam</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="jml_pinjam" name="jml_pinjam">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Data</button>

            <small class="text-muted">
                <a href="/pinjam" class="btn-link">Kembali</a>
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

<?= $this->endSection(); ?>
