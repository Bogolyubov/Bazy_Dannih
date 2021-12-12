<?php
// Подключение к базе данных:
$db=mysqli_connect("localhost", "root","root","users") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
mysqli_set_charset($db, "utf8");
 //$lang=mysqli_query($db,"set names 'utf8'"); // Тип кодировки
$name=$GET["name"];
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO user SET user_name='" . $_GET['name']
."', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']. "'";
$result = mysqli_query($db, $sql_add); // Выполнение запроса
if (mysqli_affected_rows($db)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрированы в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку пользователей </a>";
echo $_GET["e_mail"];
 echo "Error: " . $sql_add . "<br>" . mysqli_error($db); }
?>
