<? php
/ * 
Hady Ismanto Rachmat
203040134
https://github.com/dy11-laktosa/pw2021_203040134
Pertemuan 5 - 11 Maret 2021
Mempelajari Array
* /
?>

<?php
$mahasiswa = [
    ["Hady Ismanto", "203040134", "Teknik Informatika", "irhady02@gmail.com"],
    ["Alexander", "203040115", "Teknik Industri", "alexx1@gmail.com"],
    ["Chris", "203040136", "Teknik Mesin", "chrisis3@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama : <?= $m[0]; ?></li>
            <li>NRP : <?= $m[1]; ?></li>
            <li>Jurusan : <?= $m[2]; ?></li>
            <li>Email : <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>