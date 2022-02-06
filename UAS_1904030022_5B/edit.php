<?php

require 'koneksi.php';

$id = $_GET['id'];
$camaba = query ("SELECT * FROM buku WHERE id = $id");

// var_dump($camaba['nama']);

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di edit');
    document.location.href = 'buku.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal diedit');
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
        </ul>
      </div>
    </div>
  </nav>
  <!--akhir navbar-->

  <!--edit barang-->
  <div class="container">
    <br>
    <form method="POST" action="">
      <input type="hidden" class="form-control" value="<?= $camaba['id'] ?>" name="id">

      <div class="form-group">
        <label for="judul_buku">Judul Buku : </label>
        <input type="text" class="form-control" id="judul_buku" value="<?= $camaba['judul_buku'] ?>" placeholder="judul buku" name="judul_buku" autofocus required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="foto">foto : </label>
        <input type="text" class="form-control" id="foto" value="<?= $camaba['foto'] ?>" placeholder="foto" name="foto" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="tahun_penerbit">Tahun Penerbit : </label>
        <input type="text" class="form-control" id="tahun_penerbit" value="<?= $camaba['tahun_penerbit'] ?>" placeholder="tahun penerbit" name="tahun_penerbit" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="stock">Stock : </label>
        <input type="text" class="form-control" id="stock" value="<?= $camaba['stock'] ?>" placeholder="stock" name="stock" required autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="edit"><i class="fas fa-save"></i></button>
    </form>


  </div>
  </div>
</body>

</html>