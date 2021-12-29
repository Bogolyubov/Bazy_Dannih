<?php
session_start();
if(isset($_SESSION['logged_user'])) :
?>


<html>
<head> <title> Добавление автомобиля в наличие </title> </head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<H2>Добавление автомобиля в наличие:</H2>
<form action="save_new.nalichie.php" metod="get">

<?php

$mysqli = mysqli_connect(localhost, root, root, cars) or die ("Невозможно
 подключиться к серверу");
$mysqli->query('SET NAMES UTF-8');
$car=$mysqli->query("SELECT id_auto, marka_auto FROM car ");
$salon=$mysqli->query("SELECT id_salon, name_salon FROM salon ");
echo "  id авто: <select name='id_auto'>";
		while ($row = mysqli_fetch_array($car)) {
		    print "<p> <option value='" . $row['id_auto'] ."'>" . $row['marka_auto'] ."</option>";
		}
		echo "</select>";
		echo "<p>  id салона <select name='id_salon'>";
		while ($row = mysqli_fetch_array($salon)) {
		    print " <option value='" . $row['id_salon'] ."'>" . $row['name_salon'] ."</option><br>";
		}
    echo "</select>";

 ?>
<p><br>Стоимость авто : <input name="stoim_auto" size="20" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index2.php"> Вернуться к списку автомобилей в наличии </a>
</body>
</html>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
