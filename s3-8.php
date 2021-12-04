<?php
foreach ($_POST as $key => $string) {
  $_POST[$key] = iconv("cp1251", "UTF-8", $string);
}
if (empty($_POST["text2"])) {
          echo "Заполните поле";
    } else {
echo "Исходный текст: " . $_POST["text2"] . "<BR>". "<BR>";

echo "Текст после замены символов: " . mb_strtoupper($_POST["text2"]) . "<BR>" ;
}

?>