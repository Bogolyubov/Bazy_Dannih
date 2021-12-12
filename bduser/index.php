<html>
<head> <title> Сведения о прользователях сайта </title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "root","root","users") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
$query="SELECT * from user";
$result=mysqli_query($db,$query);

// подключение к базе данных:
?>
</body> </html>
<h2>Зарегистрированные пользователи:</h2>
<table border="1">
<tr>
<th> Имя </th> <th> E-mail </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($db,$query); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['user_name'] . "</td>";
echo "<td>" . $row['user_e_mail'] . "</td>";
echo "<td><a href='edit.php?id=" . $row['id_user']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['id_user']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить пользователя </a>
