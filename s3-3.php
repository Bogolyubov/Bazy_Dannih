<HTML>
<HEAD> <TITLE> Введите число </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите число
 <p> <INPUT type="text" name="a" size="4">
  </SELECT>
  <p>Какие делители вывести: 
    <SELECT  NAME="z" SIZE="1">
        <OPTION  VALUE="1"  SELECTED> Четные делители
        <OPTION  VALUE="2"> Нечетные делители
        <OPTION  VALUE="3"> Простые делители
        <OPTION  VALUE="4"> Составные делители
        <OPTION  VALUE="5"> Все делители
    </SELECT>
  <br/>
  <br/> <INPUT type="submit" name="obr" value="Вывести!"></p>
</FORM>

<?
if (is_numeric($_POST["a"])) {

    } else {
       echo "Введите числа";
       exit();
    }
function is_prime ($n)
{
    for($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return false;
        }
    }
    return true;
}
switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — это четные делители
echo "Четные делители числа: ". $_POST["a"] . "<br/>";
for ($i=2; $i<=$_POST["a"]; $i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
 break;
 case 2:
 // 2 — это нечетные делители
echo "Нечетные делители числа: ". $_POST["a"] . "<br/>";
 for ($i=1;$i<=$_POST["a"];$i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
 break;
 case 3:
 // 3 — это простые делители
$n=$_POST["a"];
echo "Простые делители числа: ". $_POST["a"] . "<br/>";
for ($i=1;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (is_prime($i)) echo $i."<br>";
}
 break;
 case 4:
 // 4 — это составные делители
echo "Составные делители числа: ". $_POST["a"] . "<br/>";
for ($i=2;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (!is_prime($i)) echo $i."<br>";
}
 break;
 case 5:
 // 5 — это все делители
echo "Все делители числа: ". $_POST["a"] . "<br/>";
echo "Четные делители". "<br/>";
for ($i=2; $i<=$_POST["a"]; $i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
echo "Нечетные делители " . "<br/>";
 for ($i=1;$i<=$_POST["a"];$i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
echo "Простые делители" . "<br/>";
for ($i=1;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (is_prime($i)) echo $i."<br>";
}
echo "Составные делители" . "<br/>";
for ($i=2;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (!is_prime($i)) echo $i."<br>";
}
 break;
}
?>
</BODY> </HTML>