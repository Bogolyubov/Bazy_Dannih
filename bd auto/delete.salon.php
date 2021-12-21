<?php
$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from salon";
$result=mysqli_query($db,$query);
$zapros="DELETE FROM salon WHERE id_salon=" . $_GET['id'];
mysqli_query($db,$zapros);
header("Location: index2.php");
exit;
?>
