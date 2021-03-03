<?php
/* 
    Hady Ismanto Rachmat
    203040134
    https://github.com/dy11-laktosa/pw2021_203040134
    Pertemuan 4( 3 Maret 2021 )
    Materi Minggu ini mempelajari mengenai Function
*/
?>

<?php
function salam($waktu = "Datang", $nama = "Admin")
{
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>

<body>
    <h1><?= salam("Pagi"); ?></h1>
</body>

</html>