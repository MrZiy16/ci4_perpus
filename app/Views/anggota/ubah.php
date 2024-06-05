<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <h3 class="text-center">Form Ubah Data Anggota</h3>
        <hr>
        <form action="/anggota/update/<?= $anggota['id_anggotA']; ?>" method="post">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="id_anggotA" class="col-sm-2 col-form-label">Id Anggota</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control
                    <?= ($validation->hasError('id_anggotA')) ? 'is-invalid' : ''; ?>" id="id_anggotA" name="id_anggotA" autofocus value="<?= $anggota['id_anggotA']; ?>">
                    <div id="id_anggotAFeedback" class="invalid-feedback">
                        <?= $validation->getError('id_anggotA'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="name_anggota" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name_anggota" name="name_anggota" value="<?= $anggota['name_anggota']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="pemerbit" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="alamat_anggota" name="alamat_anggota" value="<?= $anggota['alamat_anggota']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nomor_anggota" class="col-sm-2 col-form-label">Nomor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nomor_anggota" name="nomor_anggota" value="<?= $anggota['nomor_anggota']; ?>">
                </div>
            </div>
            <div class="col-sm-6">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
            <small class="text-muted">
                <a href="/anggota" class="btn-link">Kembali</a>
            </small>
        </form>
    </div>
</div>
<div>
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
</div>
<?= $this->endSection(); ?>