<html>
<head> <title> Добавление нового автомобиля </title> </head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /></head>
<body>
<H2>Добавление автомобиля:</H2>
<form action="save_new.php" metod="get">
Марка: <input name="marka" size="20" type="text">
<br>Модель: <input name="model" size="20" type="text">
<br>Год выпуска: <input name="year" size="4" type="int">
<br>Трансмиссия: <input name="trans" size="20" type="text">
<br>Объем выпуска: <input name="vipusk"  size="20" type="int"> </textarea>
<br>Стоимость авто: <input name="stoim"  size="20" type="int"> </textarea>
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index2.php"> Вернуться к списку автомобилей </a>
</body>
</html>
