<!DOCTYPE html>
<html lang="en">

<head>
    <title>HAIYAAA- Laporan Data Pinjam </title>
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
    <h3 class="text-center">Daftar Pinjam Bacaan</h3>
    <hr>
    <table>
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
    </table>
    <br />
    Batang, <?= date('d-m-Y');?>
    <br />
    <br />
    <br />
    <br />
    <br />
    PUSTAKA SINAR BULAN
</body>

</html>
