<?php
/*
    Hady Ismanto Rachmat
    203040134
    Jumat, 13:00
*/
?>

<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$shoes = query("SELECT * FROM walkrunstore");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel=" stylesheet " href="css/style.css ">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css " rel=" stylesheet " integritas=" sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/ Ev + nYRRuWlolflfl " crossorigin=" anonim ">

</head>

<body>
    <div class="container mt-5 mb-5">
        <table class="table table-bordered table-hover">
            <thead>
                <tr style="text-align: center; background-color:cadetblue">
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
            <?php $i = 1 ?>
            <?php foreach ($shoes as $p) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td>
                        <a href=""><button style="background-color: skyblue;">Ubah</button></a>
                        <a href=""><button style="background-color: crimson;">Hapus</button></a>
                    </td>
                    <td><?= $p["name"]; ?></td>
                    <td><?= $p["description"]; ?></td>
                    <td><?= $p["size"]; ?></td>
                    <td><?= $p["price"] ?></td>
                    <td><?= $p["category"]; ?></td>
                    <td>
                        <img src="../assets/img/<?= $p["picture"]; ?>">
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>