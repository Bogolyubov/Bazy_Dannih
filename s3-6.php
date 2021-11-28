<?php
$string1 = $_POST["a"];
$string2= $_POST["b"];
$string1=iconv("windows-1251","utf-8",$string1);
$string2=iconv("windows-1251","utf-8",$string2);
if ((empty($string1)) or (empty($string2)) or (empty($_POST["text"]))) {
          echo "Заполните все поля";
    } else {
echo "Исходный текст: " . $_POST["text"] . "<BR>". "<BR>";
$text = str_replace($_POST["a"], $_POST["b"], $_POST["text"]);
echo "Текст после замены символов: " . $text . "<BR>" . "<BR>";
echo "Символ '" . $_POST["a"] . "' был заменен на символ '". $_POST["b"]. "'";
}

?>