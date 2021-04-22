<?php
/* 
Hady Ismanto Rachmat
203040134
Jum'at 13:00
*/
?>


<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan Password
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $row['id'];
        }
        if ($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: admin.php");
        die;
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .container {
            width: 30%;
            align-content: center;
            padding-top: 15px;
            padding-bottom: 30px;
            border: 1px solid white;
            border-radius: 12px;
            margin-top: 10%;
            background-color: white;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .container h3 {
            color: #000000;
            text-align: center;
            padding: 10px;
            text-shadow: 2px 2px 2px lightgrey;
        }

        .container p {
            font-size: 14px;
            text-align: center;
            padding-top: 30px;
            padding-left: 35px;
        }

        .form {
            align-content: center;
            margin: 0% 10% 0% 5%;
        }
    </style>



</head>

<body>

    <div class="container">
        <h3>Login</h3>
        <form class="form" action="" method="post">
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style:italic;">Username atau Password salah</p>
            <?php endif; ?>
            <div class="mb-2 mt-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>


        </form>
    </div>

</body>

</html>