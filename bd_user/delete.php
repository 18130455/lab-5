<?php
require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно подключиться к серверу");
$zapros="DELETE FROM f0472780_loseva.user WHERE id_user=" . $_GET['id_user'];
mysqli_query($link, $zapros);
header("Location: index.php");
exit;
?>