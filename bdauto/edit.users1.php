<?php
session_start();
if(isset($_SESSION['logged_user']) &  ($_SESSION['status']) == 1) :
?>

<html>
<head
<title> Редактирование данных о пользователе </title>
</head>
<body>
<?php

$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу");
$query="SELECT login, password, type FROM users WHERE
id=".$_GET['id'];
$result=mysqli_query($db,$query);

while ($st = mysqli_fetch_assoc($result)) {
$id=$_GET['id'];
$login = $st['login'];
$password= $st['password'];
$type = $st['type'];
}
print "<form action='save_edit.users1.php' metod='get'>";
print "Логин: <input name='login' size='50' type='text'
value='".$login."'>";
print "<br>Пароль: <input name='password' size='20' type='text'
value='".$password."'>".$info."</textarea>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index2.php\"> Вернуться к списку
автомобилей </a>";
?>
</body>
</html>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
		<h2>Вы можете отредактировать свои данные в общей таблице</h2>
<a href="index2.php">Вернуться к таблицам</a><br>
<?php endif; ?>
