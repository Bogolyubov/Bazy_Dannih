<?php
session_start();
if(isset($_SESSION['logged_user'])) :
?>

<?php
// Подключение к базе данных:
$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
mysqli_set_charset($db, "utf8");
 //$lang=mysqli_query($db,"set names 'utf8'"); // Тип кодировки
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO nalichie SET id_auto ='" . $_GET['id_auto']
."', id_salon ='".$_GET['id_salon']."', stoim_auto ='".$_GET['stoim_auto']."'";
$result = mysqli_query($db, $sql_add); // Выполнение запроса


if (mysqli_affected_rows($db)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, автомобиль добавлен в наличие.";
 print "<p><a href=\"index2.php\"> Вернуться к списку
автомобилей в наличии </a>"; }
 else { print "Ошибка сохранения, введите корректные данные. <a href=\"index2.php\">
Вернуться к списку автомобилей в наличии </a>" ;
 }


?>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
