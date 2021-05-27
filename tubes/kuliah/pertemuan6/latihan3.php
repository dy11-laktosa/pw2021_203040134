<?php
/* 
Hady Ismanto Rachmat
203040134
https://github.com/dy11-laktosa/pw2021_203040134
Pertemuan 6 - 18 Maret 2021
Mempelajari Array Associative
*/
?>
<?php

$buku = [
    [
        "judul buku" => "Laskar Pelangi",
        "pengarang" => "Andrea Hirata",
        "penerbit" => "Bentang Pustaka Yogyakarta",
        "terbit" => "2005",
        "tebal" => "529 halaman",
        "isbn" => "979-3062-79-7",
        "gambar" => "lp.png."
    ],
    [
        "judul buku" => "Mariposa",
        "pengarang" => "Luluk Hidayatul Fajriyah",
        "penerbit" => "Coconut books",
        "terbit" => "2018",
        "tebal" => "482 halaman",
        "isbn" => "978-602-550-861-5",
        "gambar" => "mp.png"
    ],
    [
        "judul buku" => "5 CM",
        "pengarang" => "Donny Dhirgantoro",
        "penerbit" => "Grasindo",
        "terbit" => "2015",
        "tebal" => "382 halaman",
        "isbn" => "979-759-151-4",
        "gambar" => "5cm.png"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>

<body>

    <h1>Daftar Novel</h1>

    <?php foreach ($buku as $bk) : ?>
        <ul>
            <li>
                <img src="img/<?= $bk["gambar"]; ?>">
            </li>
            <li>Judul Buku : <?= $bk["judul buku"]; ?> </li>
            <li>Pengarang : <?= $bk["pengarang"]; ?> </li>
            <li>Penerbit : <?= $bk["penerbit"]; ?> </li>
            <li>Tahun Terbit : <?= $bk["terbit"]; ?> </li>
            <li>Tebal : <?= $bk["tebal"]; ?> </li>
            <li>ISBN : <?= $bk["isbn"]; ?> </li>
        </ul>
    <?php endforeach; ?>

</body>

</html>