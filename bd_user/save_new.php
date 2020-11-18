<?php
require_once 'connect.php';
$link = mysqli_connect($host, $user, $password) or die ("Невозможно подключиться к серверу");
if($_GET['name']&&$_GET['login']&&$_GET['password']&&$_GET['e_mail']&&$_GET['info']){
    $name       = htmlentities(mysqli_real_escape_string($link, $_GET['name']));
    $login      = htmlentities(mysqli_real_escape_string($link, $_GET['login']));
    $password   = htmlentities(mysqli_real_escape_string($link, $_GET['password']));
    $e_mail     = htmlentities(mysqli_real_escape_string($link, $_GET['e_mail']));
    $info       = htmlentities(mysqli_real_escape_string($link, $_GET['info']));
    mysqli_select_db($link, "f0472780_loseva") or die("Данной таблицы не существует.");
    $sql_add = "INSERT INTO f0472780_loseva.user
    (id_user, user_name, user_login, user_password, user_e_mail, user_info)
    VALUES
    (NULL, '$name', '$login', '$password', '$e_mail', '$info')";
    mysqli_query($link, $sql_add) or die("Невозможно выполнить запрос!");
    
    if(mysqli_affected_rows($link)>0){
        print "<p>Спасибо, вы зарегистрированы в базе данных.";
        print "<p><a href=\"index.php\"> Вернуться к списку пользователей </a>";}
    else{ print "Ошибка сохранения, <a href=\"index.php\"> Вернуться к списку пользователей</а>";}
}
else{ echo("Введены некорректные данные");}
mysqli_close($link);
?>