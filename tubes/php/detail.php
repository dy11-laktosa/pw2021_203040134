<?php
/* 
Hady Ismanto Rachmat
203040134
Jum'at 13:00
*/
?>

<?php
// Mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url 
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$shoes = query("SELECT * FROM walkrunstore WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import bootsrap.css -->
    <link rel="stylesheet" href="../css/im.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>detail</title>
</head>

<body style="background-image: url(../assets/img/retina_wood.png);">

    <div class="container" style="padding-left: 15px; padding-top: 20px;">
        <div class="card" style="width: 18rem; background-color:whitesmoke;">
            <div class="gambar">
                <img src="../assets/img/<?= $shoes["picture"]; ?>" alt="Card image cap">
                <div class="card-body">
                    <div class="keterangan">
                        <p class="card-text"><?= $shoes["name"]; ?></p>
                        <p class="card-text"><?= $shoes["description"]; ?></p>
                        <p class="card-text"><?= $shoes["size"]; ?></p>
                        <p class="card-text"><?= $shoes["price"]; ?></p>
                        <p class="card-text"><?= $shoes["category"]; ?></p>
                        <a class="btn btn-success" class="bi bi-arrow-right" href="../index.php">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>