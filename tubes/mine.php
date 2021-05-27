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
if (isset($_POST['cari'])) {
  $shoes = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tubes</title>
  <link rel="stylesheet" href="css/im.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/a.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">



</head>

<body style="background-image: url(assets/img/cc2.png);">
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-main mx-auto">
    <div class="container">
      <a href="index.php" class=" align-middle navbar-brand">Walkrunstore</a>
      <ul class="navbar-nav">
        <a class="nav-item nav-link page-scroll" href="php/login.php">
          <button type="button" class="btn btn-1"><i class="bi bi-box-arrow-in-right"></i> Login</button>
        </a>
      </ul>
    </div>
  </nav>

  <!-- Home -->
  <div class="home"></div>
  <div class="home-text container my-20 py-20 text-center fw-bold">
    <h1 class="display-1 py-3 fw-bold fst-italic">Walkrunstore</h1>
    <p>Store yang sudah terpercaya,kualitas wahid, dan tentunya harga terjangkau.</p>
  </div>
  <section id="search">
    <form action="" method="POST">
      <input type="text" name="keyword" style="background-color: white; border-radius: 12px;  text-align: center; " placeholder="search product" autocomplete="off" autofocus>
      <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>
    <main style="background: grey;">
      <section id="" class="pt-5">
        <h3 class="text-center pt-1 " style="color: white;">Product</h3>
        <div class="container mb-5 mt-5">
          <?php if (empty($shoes)) : ?>
            <tr>
              <td colspan="4">
                <p style="color: white; font-style:italic; text-align:center;">data tidak ditemukan</p>
              </td>
            </tr>
          <?php endif; ?>
          <div class="row">
            <?php $i = 1;
            foreach ($shoes as $shoe) : ?>
              <div class="col-md-3">
                <div class="card mt-3">
                  <div class="product align-items-center p-5 text-center">
                    <img src="assets/img/<?= $shoe['picture']; ?>" class="rounded" width="160" style="position: relative; width:100%; display: flex; justify-content: center; align-items: center;"><br>
                    <?= $shoe['name']; ?><br><br>
                    <!-- button -->
                    <a href="php/detail.php?id=<?= $shoe['id']; ?>" class="btn btn-primary" style="border-radius: 5px;">Detail</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    </main>
    </div>
    <!-- Footer -->
    <footer>
      <p class="text-center my-0 py-2 bg-main text-sec font-poppins">Copyright 2021 - Hady Ismanto Rachmat</p>
    </footer>

    <!-- Script -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>