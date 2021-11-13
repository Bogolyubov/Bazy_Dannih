<?php
$A=array();
$A1=array();
$n=rand(0,100);

for ($i = 1; $i <= $n; $i++) {    
     $A[$i-1]=rand(-100,100);
     echo $A[$i-1] . " ";
}
echo "<br> <br>";
$y=0;
foreach($A as $n){
    if($n > 0){
        $y++;
    }else{
        $A1[] = $y;
        $y = 0;
    }
}

echo 'Максимальное количество подряд идущих положительных элементов - ' . max($A1);

?>