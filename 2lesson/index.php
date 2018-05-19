<?php
$x  = (int)'2';
var_dump($x);

$a = true;
$t = false;

var_dump($a && $t);



$m = 'm';
$f = 'f';

var_dump($m=='m'xor $f == 'm' );


$u = 4;

if ($u < 10) {
    echo 'Меньше 10';
} elseif ($u < 20) {
    echo 'Меньше 20';
} else {
    echo 'Больше 20';
}



$i = 3;

switch ($i) {
    case 0:
        echo 'red';
        break;
    case 1:
        echo 'green';
        break;
    default:
        echo 'Error';
}


?>




