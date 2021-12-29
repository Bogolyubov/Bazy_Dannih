<?php
session_start();
if(isset($_SESSION['logged_user']) &  ($_SESSION['status']) == 2) :
?>
<html>
<head> <title> Добавление нового пользователя </title> </head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<H2>Добавление пользователя:</H2>
<form action="save_new.users.php" metod="get">
Логин: <input name="login" size="20" type="text">
<br>Пароль: <input name="password" size="20" type="text">
<br>Тип доступа: <input name="type" size="1" type="int">

<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="redact.users.php"> Вернуться к списку пользователей </a>
<p>
<a href="index2.php"> Вернуться к списку автомобилей </a>
</body>
</html>

<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
