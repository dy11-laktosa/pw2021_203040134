<?php
/* 
Hady Ismanto Rachmat
203040134
Jum'at 13:00
*/
?>
<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
            </script>
        ";
    } else {
        echo "<script>
            alert('Registrasi Gagal');
            document.location.href = 'login.php';
            </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .container {
            width: 30% !important;
            align-content: center;
            padding-top: 10px;
            padding-bottom: 30px;
            border: 1px solid white;
            border-radius: 12px;
            margin-top: 5%;
            background-color: white;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .container h4 {
            color: #424242;
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
        <h4>Register</h4>
        <form class="form" action="" method="post">
            <div class="mb-2 mt-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <br>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </form>
    </div>

</body>

</html>