<?php
/* 
Hady Ismanto Rachmat
203040134
Jum'at 13:00
*/
?>

<?php
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>