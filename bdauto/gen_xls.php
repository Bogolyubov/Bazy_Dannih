<?
session_start();
if(isset($_SESSION['logged_user']) ) :
	header('Content-Type: application/vnd.ms-excel; format=attachment;');
	header('Content-Disposition: attachment; filename= Автомобили в наличии.xls');
	header('Expires: Mon, 18 Jul 1998 01:00:00 GMT');
	header('Cache-Control: no-store, no-cache, must-revalidate');
	header('Cache-Control: post-check=0, pre-check=0', FALSE);
	header('Pragma: no-cache');

		define ("HOST", "localhost");
		define ("USER", "root");
		define ("PASS", "root");
		define ("DB", "cars"); // установление соединения с сервером
		 // подключение к базе данных:
		 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
		подключиться к серверу");

	?>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<table>

	<tr>
	<th>№ п/п</th>
	<th>Марка авто</th>
	<th>Модель авто</th>
	<th>Год выпуска</th>
	<th>Трансмиссия авто</th>
	<th>Стоимость авто</th>
	<th>Название салона</th>
	<th>Адрес салона</th>
	</tr>
	<?php
	$nalichie=$mysqli->query("SELECT id_auto, id_salon, stoim_auto
		FROM nalichie");

	$count= 0;
	while ($row=mysqli_fetch_array($nalichie)) {
		$cars = $mysqli->query("SELECT marka_auto, model_auto, year_auto, trans_auto FROM car WHERE id_auto =" . $row['id_auto']);
		$car= mysqli_fetch_array($cars);
		$salons = $mysqli->query("SELECT name_salon, adres_salon FROM salon WHERE id_salon =". $row['id_salon']);
		$salon = mysqli_fetch_array($salons);


		$count++;


		echo "<tr>";
		echo "<td>". $count ."</td>";
		echo "<td>". $car['marka_auto'] ."</td>";
		echo "<td>". $car['model_auto'] ."</td>";
		echo "<td>". $car['year_auto'] ."</td>";
		echo "<td>". $car['trans_auto'] ."</td>";
		echo "<td>". $row['stoim_auto'] ."</td>";
		echo "<td>". $salon['name_salon'] ."</td>";
		echo "<td>". $salon['adres_salon'] ."</td>";
		echo "</tr>";
	};
	 ?>


	</table>
<?php else : ?>
<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
