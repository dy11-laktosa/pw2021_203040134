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

// melakukan query
$shoes = query("SELECT * FROM walkrunstore");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> latihan 4c</title>

    <link rel="stylesheet" href="css/style.css">


    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-5 mb-5">
        <?php foreach ($shoes as $p) : ?>
            <tr>
                <td>
                    <p class="nama">
                </td>
                <td><a href="php/detail.php?id=<?= $p['id'] ?>" style="background-color: white; color: blue;">
                        <?= $p["name"] ?>
                    </a></td>
            </tr>
        <?php endforeach; ?>
    </div>



</body>

</html>