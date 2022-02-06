<?php

  require 'koneksi.php';
  $camaba = query("SELECT * FROM buku");

  if (isset($_POST['cari'])) {
    $camaba = cari($_POST['keyword']);
  }

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
            <li class="nav-item">
            <a class="nav-link active" href="tambah.php"><i class="fas fa-folder-plus"></i></a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->

    <!--buku-->
    <section class="buku">
      <div class="container">
        <br>
        <h3><i class="#"></i> Daftar Buku</h3>
        <hr>

        <!-- pencarian data -->
        <form action="" method="POST">
          <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" autocomplete="off">
          <button type="submit" class="btn btn-primary" name="cari"><i class="fas fa-search"></i></button>
          <a href="Buku.php" class="btn btn-primary" role="button"><i class="fas fa-undo"></i></i></a>
        </form>

        <br>
        <hr>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul Buku</th>
              <th scope="col">Foto</th>
              <th scope="col">Tahun Penerbit</th>
              <th scope="col">Stok</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>

          <?php if (empty($camaba)) : ?>
            <tr>
              <td colspan="4" class="alert alert-danger text-center" role="alert">
                <p><b>
                    data buku tidak ditemukan</p>
                </b>
              </td>
            </tr>
          <?php endif; ?>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($camaba as $cmb) : ?>
              <tr>
                <th scope="row"><?php echo $no ?></th>
                <td><?php echo $cmb['judul_buku']; ?></td>
                <td><img src="image/<?php echo $cmb['foto']; ?>" width="100px"></td>
                <td><?php echo $cmb['tahun_penerbit']; ?></td>
                <td><?php echo $cmb['stock']; ?></td>
                <td><a href="detail.php?id=<?= $cmb['id'];  ?>" class="btn btn-warning" role="button"><i class="fas fa-info"></i></a></td>
              </tr>
              <?php $no++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      </div>
    </section>
    </section>
  </body>

  </html>