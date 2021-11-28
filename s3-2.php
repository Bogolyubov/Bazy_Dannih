<HTML>
<HEAD> <TITLE> Калькулятор </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Калькулятор
 <p> <INPUT type="text" name="a" size="4">
 <INPUT type="text" name="a1" size="4">
 <br/> Действие:
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложить
 <OPTION VALUE="2"> вычесть
 <OPTION VALUE="3"> умножить
 <OPTION VALUE="4"> разделить
  </SELECT>
  <br/> <INPUT type="submit" name="obr" value="Вперед!"></p>
</FORM>

<?
if (is_numeric($_POST["a"]) and is_numeric($_POST["a1"])) {

    } else {
       echo "Введите числа";
       exit();
    }
switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — это обращение сложение
 $s1= $_POST["a"]+$_POST["a1"];
 break;
 case 2:
 // 2 — это обращение вычесть
 $s1= $_POST["a"]-$_POST["a1"];
 break;
 case 3:
 // 3 — это обращение умножить
 $s1= $_POST["a"]*$_POST["a1"];
 break;
 case 4:
 // 3 — это обращение разделить
 $s1= $_POST["a"]/$_POST["a1"];
 break;
}
echo $s1;
?>
</BODY> </HTML>