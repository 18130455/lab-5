<? require_once 'connect.php'; ?><html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<table border="1">
<tr>
<th> Имя </th> <th> E-mail </th>
<th> Редакт </th> <th> --- </th> </tr>
<?php
$link = mysqli_connect($host, $user, $password) or die ("Невозможно подключиться к серверу"); 
$result = mysqli_query($link, "SELECT * FROM f0472780_loseva.user"); 
mysqli_select_db($link, "f0472780_loseva") or die("Нет такой таблицы!");
while ($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['user_name'] . "</td>";
    echo "<td>" . $row['user_e_mail'] . "</td>";
    echo "<td><a href='edit.php?id_user=" . $row['id_user']. "'>Редактировать</a></td>";
    echo "<td><a href='delete.php?id_user=" . $row['id_user']. "'>Удалить</a></td>";
    echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.html"> Добавить пользователя </a>
</body> </html>
