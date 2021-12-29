<?php
session_start();
if(isset($_SESSION['logged_user']) &  ($_SESSION['status']) == 2) :
?>

<?php
$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу");
$lang=mysqli_query($db,"set names 'utf8'");
$query="SELECT * from car";
$result=mysqli_query($db,$query);
$zapros="DELETE FROM car WHERE id_auto=" . $_GET['id'];
mysqli_query($db,$zapros);
header("Location: index2.php");
exit;
?>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
		<h2>У вас недостаточно прав для удаления данных из таблиц</h2>
<a href="index2.php">Вернуться к таблицам</a><br>
<?php endif; ?>
