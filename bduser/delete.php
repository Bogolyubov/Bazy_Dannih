<?php
$db=mysqli_connect("localhost", "root","root","users") or die ("Невозможно
подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from user";
$result=mysqli_query($db,$query);
$zapros="DELETE FROM user WHERE id_user=" . $_GET['id'];
mysqli_query($db,$zapros);
header("Location: index.php");
exit;
?>
