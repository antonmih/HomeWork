<?php


$a = [10,20,30,'bar'];
$a[] = 100;

$code = $_GET['code'];


$i = [
    'jan' => 'январь',
    'feb' => 'февраль',
    'mar' => 'март',
    'apr' => 'апрель'
];
echo $i[$code];
$g = [
    'may' => 'май',
    'feb' => 'февраль',
    'jun' => 'июнь',
];

foreach ($i as $k => $month) {
    echo $k;
    echo '=';
    echo $month;
    echo '<br>';
}
if (in_array('январь',$i)) {
    echo 'YES!';
}

var_dump( array_merge($i, $g) ); echo '<br>';
var_dump( array_intersect($i, $g) );

echo implode(' ^ ', $i);
var_dump( explode('^', 'gfg^fgfg^fgfg'));

?>