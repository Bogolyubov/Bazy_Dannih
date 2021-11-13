<?php
$a=rand(0,100);
$b=rand(0,100);

function f($u, $t) {
    if ( $u >= 0 && $t >= 0 )
    return $u;
    elseif ( $u < 0 && $t >= 0 )
    return $t;
    elseif ( $u >=0 && $t < 0 )
    return $u - 2*$t;
    elseif ( $u < 0 && $t < 0 )
    return $u*$t + 3*$t;
}

$z=f($a-pow($b,2),$b-$a)+f($a,$b-pow($a,2));
echo "a=" . $a;
echo "<br> <br> b=" . $b;
echo "<br> <br> z=" . $z;

?>