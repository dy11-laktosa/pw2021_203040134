<?php
/* 
Hady Ismanto Rachmat
203040134
https://github.com/dy11-laktosa/pw2021_203040134
Pertemuan 11
Mempelajari Delete & Update Data
*/
?>

<?php
require 'functions.php';

// ambil data dari URL 
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>"></li>
    <li>NRP : <?= $m['nrp']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>"> ubah </a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm ('apakah anda yakin?');"> hapus</a> </li>
    <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
  </ul>


</body>

</html>