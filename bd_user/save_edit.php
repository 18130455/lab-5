<html>
<?php
require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно подключиться к серверу");
if(isset($_GET['id'])&&isset($_GET['name'])&&isset($_GET['login'])&&isset($_GET['password'])&&isset($_GET['e_mail'])&&isset($_GET['info'])){
    $name       = htmlentities(mysqli_real_escape_string($link, $_GET['name']));
    $login      = htmlentities(mysqli_real_escape_string($link, $_GET['login']));
    $password   = htmlentities(mysqli_real_escape_string($link, $_GET['password']));
    $e_mail     = htmlentities(mysqli_real_escape_string($link, $_GET['e_mail']));
    $info       = htmlentities(mysqli_real_escape_string($link, $_GET['info']));
    $id         = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
    $zapros="UPDATE
    f0472780_loseva.user
    SET user_name='$name',
    user_login='$login',
    user_password='$password',
    user_e_mail='$e_mail',
    user_info='$info'
    WHERE id_user='$id'";
    mysqli_query($link, $zapros) or die("Запрос");
    if(mysqli_affected_rows($link)>0) {
        echo 'Все сохранено. <a href="index.php"> Вернуться к списку пользователей </a>';
    } 
    else {echo 'Ошибка сохранения. <a href="index.php"> Вернуться к списку пользователей</a> ';}
} 
else {echo("Введены некорректные данные");}
?>
</html>