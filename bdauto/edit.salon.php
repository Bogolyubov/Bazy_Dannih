<?php
session_start();
if(isset($_SESSION['logged_user'])) :
?>

<html>
<head
<title> Редактирование данных об автосалоне </title>
</head>
<body>
<?php

$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу");
$query="SELECT name_salon, adres_salon FROM salon WHERE
id_salon=".$_GET['id'];
$result=mysqli_query($db,$query);
while ($st = mysqli_fetch_assoc($result)) {
$id=$_GET['id'];
$name = $st['name_salon'];
$adres= $st['adres_salon'];

}
print "<form action='save_edit.salon.php' metod='get'>";
print "Название: <input name='name' size='50' type='text'
value='".$name."'>";
print "<br>Адрес: <input name='adres' size='20' type='text'
value='".$adres."'>";

print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index2.php\"> Вернуться к списку
Автосалонов </a>";
?>
</body>
</html>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
