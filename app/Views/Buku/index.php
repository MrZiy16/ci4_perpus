<?= $this->extend('/template');?>
<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Daftar Buku Bacaan</h3>
            <hr>
            <a href="/buku/tambah"class="btn btn-primary">Tambah Buku</a>

            <!-- flashdata dengan alert-->
            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success" role="alert">
               <?=session()->getFlashdata('pesan') ?>
                </div>
                <?php endif; ?>
                
            <table class="table table-bordered table-hover mt-3" style="background-color:#6c757d; color: black;">
                <thead class="thread-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Stok Awal</th>
                        <th scope="col">Stok Buku</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $i = 1 + (6 * ($currentPage - 1));
                    foreach($buku as $b)  :
                    ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><img src="/img/<?= $b['sampul'];?>" alt="" width="75"></td>
                    <td><?= $b['judul'];?></td>
                    <td><?= $b['stok_awal'];?></td>
                    <td><?= $b['stok_buku'];?></td>
                    <td><a href="Buku/detail/<?=$b['id_buku'];?>"
                     class="btn btn-success">Detail</td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <?= $pager->links('buku','buku_pagination'); ?>
        </div>
    </div> 
</div>
<?=$this->endsection(); ?>  