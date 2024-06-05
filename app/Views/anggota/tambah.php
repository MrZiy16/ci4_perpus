<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="col">
        <h3 class="text-center">Form Tambah Anggota</h3>
        <hr>
        <form action="/anggota/simpan" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="id_anggotA" class="col-sm-2 col-form-label">Id Anggota</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control<?= array_key_exists('id_anggotA', $error) ? 'is-invalid' : ''; ?>" id="id_anggotA" name="id_anggotA">
                    <div id="anggota_perpusFeedback" class="invalid-feedback">
                        <?= array_key_exists('id_anggotA', $error) ? $error['id_anggotA'] : ''; ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="name_anggota" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name_anggota" name="name_anggota">
                </div>
            </div>

            <div class="row mb-3">
                <label for="alamat_anggota" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="alamat_anggota" name="alamat_anggota">
                </div>
            </div>

            <div class="row mb-3">
                <label for="nomor_anggota" class="col-sm-2 col-form-label">Nomer Telepon</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nomor_anggota" name="nomor_anggota">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Data</button>
            
            <small class="text-muted">
                <a href="/anggota" class="btn-link">Kembali</a>
            </small>
        </form>
    </div>
</div>

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

<?= $this->endSection(); ?>
