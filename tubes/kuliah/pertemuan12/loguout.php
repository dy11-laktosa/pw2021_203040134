<?php
/* 
Hady Ismanto Rachmat
203040134
https://github.com/dy11-laktosa/pw2021_203040134
Pertemuan 12
Mempelajari mengenai Login & Registrasi
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;

?>