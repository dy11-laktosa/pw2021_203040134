<?php
// Menghubungkan file php lain
require 'php/functions.php';

// Melakukan Query
$shoes = query("SELECT * FROM walkrunstore");

// ketika tombol cari ditekan
if (isset($_POST['cari'])) {
    $shoes = cari($_POST['keyword']);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/im.css">
    <title>walkrunstore</title>
</head>

<body style="background-image: url(assets/img/slider2.png);">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hady Ismanto Rachmat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><a href="kuliah" class="btn btn-3 mb-3 fw-bold">kuliah </a></a>
                    </li>
                    <li class="nav-item">
                        <a href="praktikum" class="btn btn-3 mb-3 fw-bold">praktikum</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="mine.php" class="btn btn-3 mb-3 fw-bold">tubes</a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <section id="main" class="container text-center">
        <!-- Home/Main -->
        <div>
            <h1 class="display-3 py-2 fw-bold fst-italic">Tugas Tugas Pemrograman Web 2021</h1>
            <h3>Ini adalah sekumpulan Tugas - tugas dari kuliah, praktikum, dan tubes</h3>

            <div class="data">
                <!-- Tampilan Pencarian -->
                <?php if (empty($shoes)) : ?>
                    <h2 class="my-3 fst-italic text-danger">Data tidak ditemukan</h2>
                <?php endif; ?>
                <a href="kuliah" class="btn btn-secondary"></button>kuliah </a>
                <a href="praktikum" class="btn btn-secondary"></button>praktikum </a>
                <a href="mine.php" class="btn btn-secondary"></button">tubes </a>


    </section>

    <!-- Script -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>