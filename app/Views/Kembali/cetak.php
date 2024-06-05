<!DOCTYPE html>
<html lang="en">

<head>
    <title> Laporan Data Pengembalian </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 4px;
        }
    </style>
</head>

<body>
    <h3 class="text-center">Daftar Pengembalian Buku</h3>
    <hr>
    <table>
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
    </table>
    <br />
    BATANG, <?= date('d-m-Y');?>
    <br />
    <br />
    <br />
    <br />
    <br />
    PUSTAKA SINAR BULAN
</body>

</html>

