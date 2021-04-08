<?php
/*
    Hady Ismanto Rachmat
    203040134
    Jumat, 13:00
*/
?>

<?php
// Menghubungkan ke database server
$conn = mysqli_connect("localhost", "root", "");
// Memilih database
$check = mysqli_select_db($conn, "pw_tubes_203040134");
// melakukan query
$result = mysqli_query($conn, "SELECT * FROM walkrunstore");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 4a</title>
    <link rel="stylesheet" href="css/style.css">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css " rel=" stylesheet " integritas=" sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/ Ev + nYRRuWlolflfl " crossorigin=" anonim ">

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table table-bordered table-hover">
            <thead>
                <tr class="background">
                    <th scope="col">NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Size</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Picture</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $row["name"]; ?></td>
                        <td><?= $row["description"]; ?></td>
                        <td><?= $row["size"]; ?></td>
                        <td><?= $row["price"] ?></td>
                        <td><?= $row["category"]; ?></td>
                        <td>
                            <img src="assets/img/<?= $row["picture"]; ?>">
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>