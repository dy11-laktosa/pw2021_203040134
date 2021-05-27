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
// $mahasiswa = [
// ["Hady Ismanto Rachmat, "203040134", "irhady02@gmail.com", "Teknik Informatika"],
// ["203040111", "Maman", "maman1@gmail.com", "Teknik Elektro"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nrp" => "203040134",
        "nama" => "Hady Ismanto Rachmat",
        "email" => "irhady02@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "s1.png"
    ],
    [
        "nrp" => "203040111",
        "nama" => "Maman",
        "email" => "maman1@gmail.com",
        "jurusan" => "Teknik Elektro",
        "gambar" => "n1.png."
    ]
];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>




</body>

</html>