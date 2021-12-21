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
print "id авто: <input name='id_auto' size='50' type='text'
value='".$id_auto."'>";
print "<br>id салона: <input name='id_salon' size='20' type='text'
value='".$id_salon."'>";
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
