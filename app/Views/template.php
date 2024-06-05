<?php helper('auth');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PERPUSTAKAAN SINAR BULAN - <?= $judul;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .custom-navbar {
      background-color: #007BFF;
    }
    .custom-navbar .navbar-brand,
    .custom-navbar .navbar-nav .nav-link ._navbar {
      color: #ffffff;
    }
    /* Add this style rule */
    .custom-navbar .navbar-nav .nav-link {
      color: #ffffff !important;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PERPUSTAKAAN SINAR BULAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/buku">Daftar Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/anggota">Daftar Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pinjam">Daftar Peminjaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kembali">Daftar Pengembalian</a>
        </li>
        <li class="nav-item">
          <?php if (logged_in()) : ?>
            <a class="nav-link" href="/logout">Logout</a>
          <?php else : ?>
            <a class="nav-link" href="/login">Login</a>
          <?php endif; ?>
        </li>
      </ul>
      <form class="d-flex" action="" method="POST">
        <input class="form-control mr-sm-2" placeholder="Cari data disini" name="keyword">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <?php $this->renderSection('content');?>
</div>

<script>
  function previewImg(){
    const sampul = document.querySelector('.custom-file-input');
    const sampulLabel = document.querySelector('.custom-file-label');
    const imgPreview = document.querySelector('.img-preview');

    //mengganti nama gambar
    sampulLabel.textContent =sampul.files[0].name;

    //mengganti preview gambar
    const fileSampul = new fileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload =function(e) {
      imgPreview.src = e.target.result;
    }
  }
</script>

</body>
</html>
