<html> <body>
<?php

$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно
подключиться к серверу");
$zapros="UPDATE car SET marka_auto='".$_GET['marka'].
"', model_auto='".$_GET['model']."', year_auto='"
.$_GET['year']."', trans_auto='".$_GET['trans'].
"', vipusk_auto='".$_GET['vipusk']."', stoim_auto='".$_GET['stoim'].
"' WHERE id_auto="
.$_GET['id'];

mysqli_query($db,$zapros);
if (mysqli_affected_rows($db)>0) {
echo 'Все сохранено. <a href="index2.php"> Вернуться к списку
автомобилей </a>'; }
else { echo 'Ошибка сохранения, введите корректные данные. <a href="index2.php">
Вернуться к списку автомобилей</a> '; }
?>
</body> </html>
