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
<th> id </th> <th> Марка </th> <th> Модель </th> <th> Стоимость </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($db,$query); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['id_auto'] . "</td>";
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




<html>
<body>
<?php
$dbsalon=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
$querysalon="SELECT * from salon";
$resultsalon=mysqli_query($dbsalon,$querysalon);
?>
</body> </html>
<h2>Зарегистрированные автосалоны:</h2>
<table border="1">
<tr>
<th> id </th> <th> Название </th> <th> Адрес </th>
<th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$resultsalon=mysqli_query($dbsalon,$querysalon); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($resultsalon)){// для каждой строки из запроса
echo "<tr>";
echo "<td>" . $row['id_salon'] . "</td>";
echo "<td>" . $row['name_salon'] . "</td>";
echo "<td>" . $row['adres_salon'] . "</td>";
echo "<td><a href='edit.salon.php?id=" . $row['id_salon']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
echo "<td><a href='delete.salon.php?id=" . $row['id_salon']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>";
}
print "</table>";
$num_rowssalon = mysqli_num_rows($resultsalon); // число записей в таблице БД
print("<P>Всего автосалонов: $num_rowssalon </p>");
?>
<p> <a href="new.salon.php"> Добавить автосалон</a>


  <html>
  <body>
  <?php
  $dbnalichie=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
  $querynalichie="SELECT * from nalichie";
  $resultnalichie=mysqli_query($dbnalichie,$querynalichie);
  ?>
  </body> </html>
  <h2>Автомобили в наличии:</h2>
  <table border="1">
  <tr>
  <th> id авто </th> <th> id автосалона </th> <th> Стоимость авто </th>
  <th> Редактировать </th> <th> Уничтожить </th> </tr>
  <?php
  $resultnalichie=mysqli_query($dbnalichie,$querynalichie); // запрос на выборку сведений о пользователях
  while ($row=mysqli_fetch_array($resultnalichie)){// для каждой строки из запроса
  echo "<tr>";
  echo "<td>" . $row['id_auto'] . "</td>";
  echo "<td>" . $row['id_salon'] . "</td>";
  echo "<td>" . $row['stoim_auto'] . "</td>";
  echo "<td><a href='edit.nalichie.php?id=" . $row['id_nalichie']
  . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
  echo "<td><a href='delete.nalichie.php?id=" . $row['id_nalichie']
  . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
  echo "</tr>";
  }
  print "</table>";
  $num_rowsnalichie = mysqli_num_rows($resultnalichie); // число записей в таблице БД
  print("<P>Всего автомобилей в наличии: $num_rowsnalichie </p>");
  ?>
  <p> <a href="new.nalichie.php"> Добавить автомобиль в наличие</a>

<p> <a href="gen_pdf.php"> Сгенерировать PDF-файл</a>
  <p> <a href="gen_xls.php"> Сгенерировать xls-файл</a>
