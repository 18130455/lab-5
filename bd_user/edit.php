
<html>
<?php
require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно подключиться к серверу");
$query = "SELECT * FROM f0472780_loseva.user WHERE id_user=".$_GET['id_user'];
$rows = mysqli_query($link, $query) or die ("Ошибка в запросе");
while ($st = mysqli_fetch_array($rows)) {
$id=$_GET['id_user'];
$name = $st['user_name'];
$login = $st['user_login'];
$password = $st['user_password'];
$e_mail = $st['user_e_mail'];
$info = $st['user_info'];
}
print "<H2>Изменить:</H2>";
print "<form action='save_edit.php' metod='get'>";
print "Имя: <input name='name' type='text' value='".$name."'><br>";
print "Логин: <input name='login' type='text' value='".$login."'><br>";
print "Пароль: <input name='password' type='text' value='".$password."'><br>";
print "Е-mail: <input name='e_mail' type='text' value='".$e_mail."'><br>";
print "Информация: <textarea name='info'>".$info."</textarea><br>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>";
mysqli_close($link);
?>

</html>