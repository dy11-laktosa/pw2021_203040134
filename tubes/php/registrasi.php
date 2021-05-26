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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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

<body style="background-image: url(../assets/img/retina_wood.png);">

    <div class="container">
        <h2 class="text-center pt-3">SIGN UP</h2>
        <form class="form" action="" method="post">

            <div class="mb-1">
                <label for="username" class="form-label">Username </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" autofocus autocomplete="off" required>
                </div>
            </div>

            <div class="mb-1">
                <label for="password" class="form-label">Password </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="password" class="form-control" name="password1" id="password1" placeholder="Enter Your Password " required>
                </div>

                <div class="mb-1">
                    <label for="password" class="form-label">Confirm </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Your Password" required>
                    </div>

                    <br>
                    <!-- button ----------------------->
                    <div class="button-login d-grid gap-2 col-6 mx-auto">
                        <button type="submit" name="register" class="btn btn-primary" style="margin-top: 8px;">REGISTRATION</button>
                    </div>
                    <p>Have an Account? <a href="login.php" style="text-decoration: none;"> Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></p>

        </form>
    </div>

</body>

</html>