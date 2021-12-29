<?php
session_start();
if(isset($_SESSION['logged_user'])) :
?>

<html> <body>
<?php

$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно
подключиться к серверу");
$zapros="UPDATE nalichie SET id_auto='".$_GET['id_auto'].
"', id_salon='".$_GET['id_salon']."',stoim_auto='".$_GET['stoim_auto']."' WHERE id_nalichie="
.$_GET['id'];

mysqli_query($db,$zapros);
if (mysqli_affected_rows($db)>0) {
echo 'Все сохранено. <a href="index2.php"> Вернуться к списку
автомобилей в наличии </a>'; }
else { echo 'Ошибка сохранения, введите корректные данные. <a href="index2.php">
Вернуться к списку автомобилей в наличии</a> '; }
?>
</body> </html>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
