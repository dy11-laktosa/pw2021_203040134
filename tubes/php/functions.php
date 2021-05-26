<?php
/* 
Hady Ismanto Rachmat
203040134
Jum'at 13:00
*/
?>

<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040134");

    return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function untuk menambahkan data di dalam database
function tambah($data)
{
    $conn = koneksi();

    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $size = htmlspecialchars($data['size']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);
    $picture = htmlspecialchars($data['picture']);

    $query = "INSERT INTO walkrunstore
                VALUES
                ('', '$name', '$description', '$size', '$price', '$category', '$picture' )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
//function hapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM walkrunstore WHERE id = $id");
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
// function ubah data 
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $size = htmlspecialchars($data['size']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);
    $picture = htmlspecialchars($data['picture']);

    $query = "UPDATE walkrunstore SET
            
            name = '$name',
            description = '$description',
            size = '$size',
            price = '$price',
            category = '$category',
            picture = '$picture'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// function cari 
function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM walkrunstore
            WHERE 
            name LIKE '%$keyword%' OR
            description LIKE '%$keyword%' 
            ";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek dulu username 
    if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if (password_verify($password, $user['password'])) {
            // set session
            $_SESSION['login'] = true;

            header("Location:admin.php");
            exit;
        }
    }

    return [
        'error' => true,
        'pesan' => 'Username / Password Salah!'
    ];
}

function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if (empty($username) || empty($password2) || empty($password2)) {
        echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika username sudah ada 
    if (query("SELECT * FROM host WHERE username = '$username'")) {
        echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'regitrasi.php';
          </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika password < 5 digit
    if (strlen($password1) < 5) {
        echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
        return false;
    }

    // jika username & password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO host
              VALUES
            ('', '$username', '$password_baru')
          ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
?>