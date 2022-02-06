<?php

require 'koneksi.php';

if (isset($_POST['tambah'])) {
  if (tambahd($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil ditambah');
    document.location.href = 'Buku.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal ditambah');
    </script>";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="#">
  <link rel="stylesheet" type="text/css" href="tema/fontawesome/css/all.min.css">

  <title>UZI PERPUS</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        UZI <strong>Perpustakaan</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Buku.php">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Anggota.php">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="tambah.php"><i class="fas fa-folder-plus"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--akhir navbar-->

  <!-- input barang -->
  <!-- konten -->
  <h3></i> Input data buku </h3>
  <hr>

  <form method="POST" action="">
    <div class="form-group">
      <label for="judul_buku">Judul Buku : </label>
      <input type="text" class="form-control" id="judul_buku" placeholder="Judul Buku" name="judul_buku" autofocus required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="foto">Foto : </label>
      <input type="text" class="form-control" id="foto" placeholder="Foto" name="foto" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="tahun_penerbit">Tahun Penerbit : </label>
      <input type="text" class="form-control" id="tahun_penerbit" placeholder="Tahun Penerbit" name="tahun_penerbit" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="stock">Stock : </label>
      <input type="text" class="form-control" id="stock" placeholder="Input Stock" name="stock" required autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary" name="tambah"><i class="fas fa-save"></i></button>
  </form>


  </div>
  </div>
</body>

</html>