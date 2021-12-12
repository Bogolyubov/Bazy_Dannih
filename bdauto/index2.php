<html>
<head> <title> Сведения о прользователях сайта </title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
$query="SELECT * from car";
$result=mysqli_query($db,$query);

// подключение к базе данных:
?>
</body> </html>
<h2>Зарегистрированные автомобили:</h2>
<table border="1">
<tr>
<th> Марка </th> <th> Модель </th> <th> Стоимость </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($db,$query); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['marka_auto'] . "</td>";
echo "<td>" . $row['model_auto'] . "</td>";
echo "<td>" . $row['stoim_auto'] . "</td>";
echo "<td><a href='edit.php?id=" . $row['id_auto']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.php?id=" . $row['id_auto']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего автомобилей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить авто </a>
