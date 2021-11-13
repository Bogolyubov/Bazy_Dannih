
<?php
$x=rand(3,20);
$mass=array();

echo ("Массив из " . $x . " элементов, заполненный случайными числами: ");
for ($n = 1; $n <= $x; $n++) {    
     $mass[$n-1]=rand(10,99);
     echo $mass[$n-1] . " ";
}
echo "<br> <br>";

echo ("Массив в отсортированном виде: ");
sort($mass);
reset($mass);
 for ($n = 1; $n <= $x; $n++) {    
     echo $mass[$n-1] . " ";
}
echo "<br> <br>";

echo ("Элементы массива в обратном порядке: ");
$mass=array_reverse($mass);
reset($mass);
 for ($n = 1; $n <= $x; $n++) {    
     echo $mass[$n-1] . " ";
}
echo "<br> <br>";

echo ("Массив после удаления последнего элемента: ");
array_pop($mass);
reset($mass);
 for ($n = 1; $n <= $x; $n++) {    
     echo $mass[$n-1] . " ";
}
echo "<br> <br>";

echo ("Сумма элементов массива: ");
$sum = array_sum($mass);
echo $sum . " ";
echo "<br> <br>";

echo ("Количество элементов массива: ");
$count = count($mass);
echo $count;
echo "<br> <br>";

echo ("Среднее арифметическое для элементов массива: ");
$sredn=$sum/$count;
echo $sredn;
echo "<br> <br>";

if (in_array(50, $mass)) {
    echo "Число 50 есть в массиве";
} 
else {echo "Числа 50 нет в массиве";}
echo "<br> <br>";

echo ("Массив из уникальных значений: ");
$mass=array_unique($mass);
 for ($n = 1; $n <= $x; $n++) {    
     echo $mass[$n-1] . " ";
}
echo "<br> <br>";
