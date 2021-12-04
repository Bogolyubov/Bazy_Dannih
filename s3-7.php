<?php
foreach ($_POST as $key => $string) {
  $_POST[$key] = iconv("cp1251", "UTF-8", $string);
}
if ((!is_numeric($_POST["c"])) or (empty($_POST["text1"]))) {
          echo "Введите корректные данные";
    } else {
echo "Исходный текст: " . $_POST["text1"] . "<BR>". "<BR>";


$text = $_POST["text1"];
$separator = " \t\n";
$array_words = array();
$n = array();
$tok = strtok($text, $separator);



while($tok) {
    $array_words[] = $tok;
    $tok = strtok($separator);
}
for ($i = 0; $i < count($array_words); $i++) {
    if (mb_strlen($array_words[$i]) == $_POST["c"]){
    $t[$i]=$array_words[$i];

    }
}

echo "Вывести слова с количством символов равным: " . $_POST["c"] . "<BR>" . "<BR>";
echo "Список слов с количеством символов равным " . $_POST["c"] . ": ";
for ($i = 0; $i < count($array_words); $i++) {
    echo $t[$i];
}

}

?>