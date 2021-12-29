<?php
$title="Форма авторизации"; // название формы
require "db.php"; // подключаем файл для соединения с БД

// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;
// Пользователь нажимает на кнопку "Авторизоваться" и код начинает выполняться
if(isset($data['do_login'])) {
 // Создаем массив для сбора ошибок
 $errors = array();
 // Проводим поиск пользователей в таблице users
 $user = R::findOne('users', 'login = ?', array($data['login']));
 if($user) {
 	// Если логин существует, тогда проверяем пароль
 	if(md5($data['password']) == $user->password) {
 		// Все верно, пускаем пользователя
 		$_SESSION['logged_user'] = $user;
    $_SESSION['status'] = $user['type'];
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['login'];
 		// Редирект на главную страницу
                header('Location: /index2.php');
 	} else {
    $errors[] = 'Пароль введен неверно!';
 	}
 } else {
 	$errors[] = 'Пользователь с таким логином не найден!';
 }
if(!empty($errors)) {

		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';

	}

}
?>

<div class="container mt-4">
		<div class="row">
			<div class="col">
		<!-- Форма авторизации -->
		<h2>Форма авторизации</h2>
		<form action="login.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
			<input type="password" class="form-control" name="password" id="pass" placeholder="Введите пароль" required><br>
			<button class="btn btn-success" name="do_login" type="submit">Авторизоваться</button>
		</form>
		<br>
			</div>
		</div>
	</div>
