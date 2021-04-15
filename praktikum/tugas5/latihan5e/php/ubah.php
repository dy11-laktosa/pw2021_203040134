<?php
require 'functions.php';
//mengambil data url
$id = $_GET['id'];

//query data mahasiswa berdasarkan id
$p = query("SELECT * FROM walkrunstore WHERE id= $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
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

    <div class="container">
        <h3>Form Ubah Data Sepatu</h3>
        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
            <ul>
                <li>
                    <label for="name">Name :</label><br>
                    <input type="text" name="name" id="name" required><br><br>
                </li>
                <li>
                    <label for="description">Description :</label><br>
                    <input type="text" name="description" id="description" required><br><br>
                </li>
                <li>
                    <label for="size">Size :</label><br>
                    <select name="size" id="size" required>
                        <option value="">------- Pilih Size -------</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                    </select>
                </li>
                <br>
                <li>
                    <label for="price">Price :</label><br>
                    <input type="text" name="price" id="price" required><br><br>
                </li>
                <li>
                    <label for="category">Category :</label><br>
                    <input type="text" name="category" id="category" required><br><br>
                </li>
                <li>
                    <label for="picture">Picture :</label><br>
                    <input type="text" name="picture" id="picture" required><br><br>
                </li>
                <br>
                <button type="submit" name="ubah" style="background-color: #F0FFF0;">Ubah Data!</button>
                <button type="submit" style="background-color: #FFF8DC ;">
                    <a style="color: black;" href="../index.php">Kembali</a>
                </button>
            </ul>

        </form>
    </div>

</body>

</html>