<?php

require 'koneksi.php';

$id = $_GET['id'];
$camaba = query ("SELECT * FROM anggota WHERE id = $id");

// var_dump($camaba['nama']);

if (isset($_POST['edit'])) {
  if (edita($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di edit');
    document.location.href = 'Anggota.php';
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
        <label for="nama">Nama Anggota : </label>
        <input type="text" class="form-control" id="nama" value="<?= $camaba['nama'] ?>" placeholder="nama anggota" name="nama" autofocus required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat : </label>
        <input type="text" class="form-control" id="alamat" value="<?= $camaba['alamat'] ?>" placeholder="alamat anggota" name="alamat" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="nomor_hp">Nomor Hp : </label>
        <input type="text" class="form-control" id="nomor_hp" value="<?= $camaba['nomor_hp'] ?>" placeholder="nomor hp" name="nomor_hp" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="jurusan_anggota">Jurusan Anggota : </label>
        <input type="text" class="form-control" id="jurusan_anggota" value="<?= $camaba['jurusan_anggota'] ?>" placeholder="jurusan anggota" name="jurusan_anggota" required autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="edit"><i class="fas fa-save"></i></button>
    </form>


  </div>
  </div>
</body>

</html>