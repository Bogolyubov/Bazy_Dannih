<html>
<head> <title> Сведения о зарегистрированных пользователях </title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<?php
session_start();
if(isset($_SESSION['logged_user']) &  ($_SESSION['status']) == 2)  :
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
$query="SELECT * from users";
$result=mysqli_query($db,$query);

// подключение к базе данных:
?>
</body> </html>
<h2>Зарегистрированные пользователи:</h2>
<table border="1">
<tr>
<th> Логин </th> <th> Пароль </th> <th> Тип доступа </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($db,$query); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['login'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td><a href='edit.users.php?id=" . $row['id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.users.php?id=" . $row['id']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.users.php"> Добавить пользователя </a>
<p> <a href="index2.php"> Вернуться к списку автомобилей </a>


<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
		<h2>У вас недостаточно прав для просмотра этой таблицы</h2>
<a href="index2.php">Вернуться к автомобилям</a><br>
<?php endif; ?>
