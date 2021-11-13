<?php
echo ("Массив: ");
$cust=array(
    'cnum' => 2001,
    'cname' => 'Hoffman',
    'city' => 'London',
    'snum' => 1001
);
print_r($cust);
echo "<br> <br>";

echo ("Массив с ключом rating: ");
$cust['rating'] = 100;
print_r($cust);
echo "<br> <br>";

echo ("Массив отсортированный по значениям: ");
asort($cust);
print_r($cust);
echo "<br> <br>";

echo ("Массив отсортированный по ключам: ");
ksort($cust);
print_r($cust);
echo "<br> <br>";

echo ("Массив отсортированный с помощью функции sort(): ");
sort($cust);
print_r($cust);
echo "<br> <br>";
?>