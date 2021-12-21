<html>
<head
<title> Редактирование данных об автомобиле </title>
</head>
<body>
<?php

$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу");
$query="SELECT marka_auto, model_auto,
year_auto, trans_auto, vipusk_auto, stoim_auto FROM car WHERE
id_auto=".$_GET['id'];
$result=mysqli_query($db,$query);

while ($st = mysqli_fetch_assoc($result)) {
$id=$_GET['id'];
$marka = $st['marka_auto'];
$model= $st['model_auto'];
$year = $st['year_auto'];
$trans = $st['trans_auto'];
$vipusk = $st['vipusk_auto'];
$stoim = $st['stoim_auto'];
}
print "<form action='save_edit.php' metod='get'>";
print "Марка: <input name='marka' size='50' type='text'
value='".$marka."'>";
print "<br>Модель: <input name='model' size='20' type='text'
value='".$model."'>";
print "<br>Год выпуска: <input name='year' size='20' type='text'
value='".$year."'>";
print "<br>Трансмиссия: <input name='trans' size='30' type='text'
value='".$trans."'>";
print "<br>Объем выпуска: <input name='vipusk' size='20' type='text'
value='".$vipusk."'>";
print "<br>Стоимость: <input name='stoim' size='30' type='text'
value='".$stoim."'>".$info."</textarea>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index2.php\"> Вернуться к списку
Автомобилей </a>";
?>
</body>
</html>
