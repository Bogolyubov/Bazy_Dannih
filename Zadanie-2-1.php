<?php

$treug=array();
$kvd=array();
$rez=array();
$rez1=array();

echo'Пункт 1: ';
for ($n = 1; $n <= 10; $n++) {    
     $treug[$n-1]=$n*($n+2)/2;
     echo $treug[$n-1] . " ";
}
echo "<br>";

echo'Пункт 2: ';
for ($n = 1; $n <= 10; $n++) {    
     $kvd[$n-1]=pow($n,2);
     echo $kvd[$n-1] . " ";
}
echo "<br>";

echo'Пункт 3: ';
 $rez=array_merge($treug,$kvd);
 print_r($rez);
echo "<br>";

echo'Пункт 4: ';
 sort($rez);
 reset($rez);
 while (list($key, $val) = each($rez)) {
 echo "rez  [" . $key . "] = " . $val . "\n";
}
echo "<br>";

echo'Пункт 5: ';
 unset($rez[0]);
 print_r($rez);
echo "<br>";

echo'Пункт 6: ';
$rez1 = array_unique($rez);
print_r($rez1);

?>