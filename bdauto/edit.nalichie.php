<?php
session_start();
if(isset($_SESSION['logged_user'])) :
?>

<html>
<head
<title> Редактирование данных о наличии автомобиля </title>
</head>
<body>
<?php

$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу");
$query="SELECT id_auto, id_salon, stoim_auto FROM nalichie WHERE
id_nalichie=".$_GET['id'];
$result=mysqli_query($db,$query);
while ($st = mysqli_fetch_assoc($result)) {
$id=$_GET['id'];
$id_auto = $st['id_auto'];
$id_salon= $st['id_salon'];
$stoim_auto= $st['stoim_auto'];

}
print "<form action='save_edit.nalichie.php' metod='get'>";
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

 
print "<br>Стоимость автомобиля: <input name='stoim_auto' size='20' type='text'
value='".$stoim_auto."'>";

print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index2.php\"> Вернуться к списку
автомобилей в наличии </a>";
?>
</body>
</html>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
