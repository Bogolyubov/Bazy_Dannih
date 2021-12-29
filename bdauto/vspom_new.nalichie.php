<?php
session_start();
if(isset($_SESSION['logged_user'])) :
?>

<?php

$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу");
mysqli_set_charset($db, "utf8");
$query="SELECT marka_auto, model_auto,
year_auto, trans_auto, vipusk_auto, stoim_auto FROM car WHERE id_auto=".$_GET['id_auto'];
$result=mysqli_query($db,$query);
while ($st = mysqli_fetch_assoc($result)) {
$id=$_GET['id'];
$marka= $st['marka_auto'];
$model= $st['model_auto'];
$year = (int) $st['year_auto'];
$trans= $st['trans_auto'];
$vipusk= $st['vipusk_auto'];
}


$query1="SELECT id_salon, name_salon,
adres_salon FROM salon WHERE id_salon=".$_GET['id_salon'];
$result1=mysqli_query($db,$query1);
while ($st = mysqli_fetch_assoc($result1)) {
$id=$_GET['id_salon'];
$name= $st['name_salon'];
$adres= $st['adres_salon'];
}
$stoim=$_GET['stoim_auto'];

 ?>
<?require_once 'save_new.nalichie.php';?>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
