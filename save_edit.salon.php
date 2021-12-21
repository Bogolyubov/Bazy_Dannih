<html> <body>
<?php

$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно
подключиться к серверу");
$zapros="UPDATE salon SET name_salon='".$_GET['name'].
"', adres_salon='".$_GET['adres']."' WHERE id_salon="
.$_GET['id'];

mysqli_query($db,$zapros);
if (mysqli_affected_rows($db)>0) {
echo 'Все сохранено. <a href="index2.php"> Вернуться к списку
автосалонов </a>'; }
else { echo 'Ошибка сохранения, введите корректные данные. <a href="index2.php">
Вернуться к списку автосалонов</a> '; }
?>
</body> </html>
