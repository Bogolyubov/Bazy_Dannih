
<?php

require "Autorization/rb.php";
R::setup( 'mysql:host=localhost;dbname=cars',
        'root', 'root' );

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start();
if(isset($_SESSION['logged_user']) &  ($_SESSION['status']) == 2) :
?>

<html> <body>
<?php
$errors = array();

if(($_GET['type'] < 1) || ($_GET['type'] > 2) || $_GET['type'] == '') {
$errors[] = "В поле тип доступа должно быть введено 1 или 2!";
}
		 // функция mb_strlen - получает длину строки
		// Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
if(mb_strlen($_GET['login']) < 5 || mb_strlen($_GET['login']) > 90) {
	$errors[] = "Недопустимая длина логина";
}
if (mb_strlen($_GET['password']) < 2 || mb_strlen($_GET['password']) > 32){
	$errors[] = "Недопустимая длина пароля (от 2 до 32 символов)";
}
// Проверка на уникальность логина
$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу");
$query="SELECT login FROM users WHERE id=".$_GET['id'];
$result=mysqli_query($db,$query);
while ($st = mysqli_fetch_assoc($result)) {
$login = $st['login'];
}
if ($_GET['login'] != $login){
if (R::count('users', "login = ?", array($_GET['login'])) > 0)   {
$errors[] = "Пользователь с таким логином существует!";
      }
}



if(empty($errors)) {

$password=md5($_GET['password']);
$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно
подключиться к серверу");
$zapros="UPDATE users SET login='".$_GET['login'].
"', password='".$password."', type='".$_GET['type'].
"' WHERE id=" .$_GET['id'];
mysqli_query($db,$zapros);
if (mysqli_affected_rows($db)>0) {
echo 'Все сохранено. <a href="index2.php"> Вернуться к списку
автомобилей </a>'; }
else { echo 'Ошибка сохранения, введите корректные данные. <a href="index2.php">
Вернуться к списку автомобилей</a> '; }
} else {
              // array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент.
  echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
}
?>
</body> </html>

<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
		<h2>У вас недостаточно прав для редактирования данных о пользователях</h2>
<a href="index2.php">Вернуться к таблицам</a><br>
<?php endif; ?>
