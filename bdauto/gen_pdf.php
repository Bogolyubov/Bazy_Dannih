


<?php
session_start();
if(isset($_SESSION['logged_user']) ) :


require_once('tcpdf/tcpdf.php');
	ob_clean();

	define ("HOST", "localhost");
	define ("USER", "root");
	define ("PASS", "root");
	define ("DB", "cars"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");

	$pdf = new TCPDF('L', 'mm', 'A3', true, 'UTF-8', false);
// Устанавливаем информацию о документе
$pdf->SetAuthor('Максим Боголюбов');
$pdf->SetTitle('Автомобили в наличии');
// Устанавливаем верхний и нижний колонтитулы
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// Устанавливаем моноширинный шрифт по умолчанию
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// Устанавливаем отступы
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// Устанавливаем автоматические разрывы страниц
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// преобразуем шрифт
$fontname = TCPDF_FONTS::addTTFfont(dejavusans, 'TrueTypeUnicode', '', 96);
$pdf->SetFont(dejavusans, '', 10, '', true);
// Добавляем страницу
$pdf->AddPage();

$nalichie=$mysqli->query("SELECT id_auto, id_salon, stoim_auto
	FROM nalichie");
$rows = "";

$count= 0;
while ($row=mysqli_fetch_array($nalichie)) {
  $rows .=  "<tr>";
	$cars = $mysqli->query("SELECT marka_auto, model_auto, year_auto, trans_auto FROM car WHERE id_auto =" . $row['id_auto']);
	$car= mysqli_fetch_array($cars);
	$salons = $mysqli->query("SELECT name_salon, adres_salon FROM salon WHERE id_salon =". $row['id_salon']);
	$salon = mysqli_fetch_array($salons);

	$count++;

	$rows = $rows. "<td>". $count ."</td>";
	$rows = $rows. "<td>". $car['marka_auto'] ."</td>";
	$rows = $rows. "<td>". $car['model_auto'] ."</td>";
	$rows = $rows. "<td>". $car['year_auto'] ."</td>";
	$rows = $rows. "<td>". $car['trans_auto'] ."</td>";
	$rows = $rows. "<td>". $row['stoim_auto'] ."</td>";
	$rows = $rows. "<td>". $salon['name_salon'] ."</td>";
	$rows = $rows. "<td>". $salon['adres_salon'] ."</td>";
  $rows .=  "</tr>";
};


// Устанавливаем текст
$html = "
<h2> Автомобили в наличии </h2>
	<table  border='1'>
		<tr>
			<th>№ п/п</th> <th>Марка</th> <th>Модель</th> <th>год выпуска</th> <th>трансмиссия</th> <th>стоимость</th> <th>название салона</th> <th>адрес салона</th>
		</tr>

" .  $rows  ."</table>";
// Выводим текст с помощью writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// Закрываем и выводим PDF документ
$pdf->Output('document.pdf', 'I');
?>


<?php else : ?>
<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
<a href="Autorization/login.php">Авторизоваться</a><br>
<?php endif; ?>
