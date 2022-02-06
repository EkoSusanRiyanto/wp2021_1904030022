<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030022');

// pemanggilan tabel
function query($query)
{
  global $conn;

  // mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM buku WHERE judul_buku LIKE '%$keyword%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function edit($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['judul_buku']);
  $foto = htmlspecialchars($data['foto']);
  $tahun = htmlspecialchars($data['tahun_penerbit']);
  $stock = htmlspecialchars($data['stock']);

  $query = "UPDATE buku SET
  judul_buku ='$nama',
  foto ='$foto',
  tahun_penerbit ='$tahun',
  stock ='$stock'
  WHERE id =$id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
function tambahd($data)
{
  global $conn;

  $nama = htmlspecialchars($data['judul_buku']);
  $foto = htmlspecialchars($data['foto']);
  $tahun = htmlspecialchars($data['tahun_penerbit']);
  $stock = htmlspecialchars($data['stock']);

  $query = "INSERT INTO buku
VALUES
(null,'$nama','$foto','$tahun','$stock');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

//anggota

function caria($keyword)
{
  global $conn;

  $query = "SELECT * FROM anggota WHERE nama LIKE '%$keyword%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function edita($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $nomor = htmlspecialchars($data['nomor_hp']);
  $jurusan = htmlspecialchars($data['jurusan_anggota']);

  $query = "UPDATE anggota SET
  nama ='$nama',
  alamat ='$alamat',
  nomor_hp ='$nomor',
  jurusan_anggota ='$jurusan'
  WHERE id =$id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapusa($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM anggota WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
function tambaha($data)
{
  global $conn;

  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $nomor = htmlspecialchars($data['nomor_hp']);
  $jurusan = htmlspecialchars($data['jurusan_anggota']);

  $query = "INSERT INTO anggota
VALUES
(null,'$nama','$alamat','$nomor','$jurusan');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}