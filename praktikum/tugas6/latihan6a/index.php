<?php
/*
    Hady Ismanto Rachmat
    203040134
    Jumat, 13:00
*/
?>

<?php

// menghubungkan dengan file php lainnya
require 'php/functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $shoes = query("SELECT * FROM walkrunstore WHERE
    name LIKE '%$keyword%' OR
    description LIKE '%$keyword%' OR
    size LIKE '%$keyword%' OR
    price LIKE '%$keyword%' OR
    category LIKE '%$keyword%' 
    ");
} else {
    $shoes = query("SELECT * FROM walkrunstore");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5e</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .container {
            border: 3px grey solid;
            padding-left: 20px;
            margin-right: 50%;
            margin-left: 30%;
            background-color: #F0FFFF;
            color: black;
        }
    </style>


</head>

<body>
    <br>
    <a href="php/admin.php"><button style="background-color: lightgreen ; color: black; border-radius: 10px;">Halaman Admin</button></a>
    <form action="" method="get">
        <input type="" name="keyword" style="background-color: white ;" autofocus>
        <button type="submit" name="cari" style="background-color: crimson;">Cari!</button>
    </form>
    <div class="container mt-5 mb-5">
        <?php foreach ($shoes as $p) : ?>
            <tr>
                <td>
                    <p class="nama">
                </td>
                <td><a href="php/detail.php?id=<?= $p['id'] ?>" style="color: #F1948A ; ">
                        <?= $p["name"] ?>
                    </a></td>
            </tr>
        <?php endforeach; ?>
    </div>



</body>

</html>