<?php

require "Autorization/rb.php";
R::setup( 'mysql:host=localhost;dbname=cars',
        'root', 'root' );

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');


session_start();
if(isset($_SESSION['logged_user']) &  ($_SESSION['status']) == 2) :
?>

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
if(R::count('users', "login = ?", array($_GET['login'])) > 0) {
  $errors[] = "Пользователь с таким логином существует!";
}



	if(empty($errors)) {
$password=md5($_GET['password']);
// Подключение к базе данных:
$db=mysqli_connect("localhost", "root","root","cars") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
mysqli_set_charset($db, "utf8");
 //$lang=mysqli_query($db,"set names 'utf8'"); // Тип кодировки
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO users SET login ='" . $_GET['login']
."', password ='".$password."', type='".$_GET['type'] . "'";
$result = mysqli_query($db, $sql_add); // Выполнение запроса
if (mysqli_affected_rows($db)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, пользователь добавлен в базу данных.";
 print "<p><a href=\"redact.users.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения, введите корректные данные. <a href=\"redact.users.php\">
Вернуться к списку пользователей </a>";
 }
} else {
              // array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент.
  echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
}

?>
<?php else : ?>

<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
