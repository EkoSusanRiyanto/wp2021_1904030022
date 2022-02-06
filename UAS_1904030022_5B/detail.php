<?php

  require 'koneksi.php';

  if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
  }

  $id = $_GET['id'];
  $camaba = query("SELECT * FROM buku WHERE id=$id");
  // var_dump($camaba[0]['nama']);
  ?> <!doctype html>
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

    <!--stok-->
    <section class="stok">
      <div class="container">
        <br>
        <h3><i class="#"></i> Daftar Buku</h3>
        <hr>
        <ul class="list-group">
          <li class="list-group-item active"><?= $camaba['judul_buku']; ?></li>
          <li class="list-group-item"><img src="image/<?= $camaba['foto']; ?>" alt="" width="200px"></li>
          <li class="list-group-item">Tahun Penerbit : <?= $camaba['tahun_penerbit']; ?></li>
          <li class="list-group-item">stock buku : <?= $camaba['stock']; ?></li>
          <li class="list-group-item">
            <a href="edit.php?id=<?= $camaba['id'];  ?>" class="btn btn-warning" role="button"><i class="fas fa-edit"></i></a> |
            <a href="hapus.php?id=<?= $camaba['id'];  ?>" onclick="return confirm('apakah anda akan menghapus data ini');" class="btn btn-danger" role="button"><i class="fas fa-trash-alt"></i></a> |
            <a href="Buku.php" class="btn btn-primary" role="button"><i class="fas fa-backspace"></i></a>
          </li>
        </ul>
      </div>
      </div>
  </body>

  </html>