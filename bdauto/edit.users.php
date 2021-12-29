<?php
session_start();
if(isset($_SESSION['logged_user']) &  ($_SESSION['status']) == 2) :
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

print "<form action='save_edit.users.php' metod='get'>";
print "Логин: <input name='login' size='50' type='text'
value='".$login."'>";
print "<br>Пароль: <input name='password' size='20' type='text'
value='".$password."'>";
print "<br>Тип доступа: <input name='type' size='30' type='text'
value='".$type."'>".$info."</textarea>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"redact.users.php\"> Вернуться к списку
пользователей </a>";

?>
</body>
</html>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
		<h2>У вас недостаточно прав для редактирования данных о пользователях</h2>
<a href="index2.php">Вернуться к таблицам</a><br>
<?php endif; ?>
