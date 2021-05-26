<?php
/* 
Hady Ismanto Rachmat
203040134
Jum'at 13:00
*/
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

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
    <link rel="stylesheet" href="../css/im.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>admin</title>
</head>

<body style="background-image: url(../assets/img/retina_wood.png);">
    <br>
    <div class="container mt-10 mb-10">
        <div class="add">
            <a href="tambah.php"><button style="background-color: #00CED1 ; color: black; border-radius: 10px;">Tambah Data</button></a>
        </div>
        <form action="" method="get">
            <input type="" name="keyword" style="background-color: white ;" autofocus>
            <button type="submit" name="cari" style="background-color: white;">Cari!</button>
        </form>
        <br>
        <table class="table table-bordered table-hover">
            <thead>
                <tr style="text-align: center; background-color:white">
                    <th scope="col">NO</th>
                    <th scope="col">Opsi</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Size</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Picture</th>
                </tr>
            </thead>
            <?php if (empty($shoes)) : ?>
                <tr>
                    <td>
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach ($shoes as $p) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td>
                            <a href="ubah.php?id=<?= $p["id"] ?>"><button style="background-color: skyblue ;">Ubah</button></a>
                            <a href="hapus.php?id=<?= $p["id"]; ?>" onclick="return confirm('yakin?');"><button style="background-color: crimson;">Hapus</button></a>
                        </td>
                        <td><?= $p["name"]; ?></td>
                        <td><?= $p["description"]; ?></td>
                        <td><?= $p["size"]; ?></td>
                        <td><?= $p["price"]; ?></td>
                        <td><?= $p["category"]; ?></td>
                        <td><img src="../assets/img/<?= $p["picture"]; ?>">
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
        <div class="logout">
            <a href="logout.php"><button style="background-color: crimson; color:black; border-radius: 10px;">Logout</button></a>
        </div>
    </div>
    <!-- Script -->
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>