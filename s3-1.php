<?
if ($_POST["a"]>$_POST["b"]) {
 echo ("Наибольшее число: " . $_POST["a"]);
} elseif ($_POST["a"] == $_POST["b"]) {
    echo "Числа равны";
} else {
    echo ("Наибольшее число: " . $_POST["b"]);
}
?> 