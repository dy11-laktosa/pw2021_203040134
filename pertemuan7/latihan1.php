<?php
/* 
Hady Ismanto Rachmat
203040134
https://github.com/dy11-laktosa/pw2021_203040134
Pertemuan 7 - 18 Maret 2021
Mempelajari GET & POST
*/
?>

<?php
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilX (){
//     global $x;
//     echo $x; 
// }

// tampilX();

// SUPERGLOBALS
// varoable global milik PHP
// merupakan Array Associative

// var_dump($GET);
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
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?> &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>