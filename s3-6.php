<?php
foreach ($_POST as $key => $string) {
  $_POST[$key] = iconv("cp1251", "UTF-8", $string);
}
if ((empty($_POST["a"])) or (empty($_POST["b"])) or (empty($_POST["text"]))) {
          echo "Заполните все поля";
    } else {
echo "Исходный текст: " . $_POST["text"] . "<BR>". "<BR>";
$text = str_replace($_POST["a"], $_POST["b"], $_POST["text"]);
echo "Текст после замены символов: " . $text . "<BR>" . "<BR>";
echo "Символ '" . $_POST["a"] . "' был заменен на символ '". $_POST["b"]. "'";
}

?>