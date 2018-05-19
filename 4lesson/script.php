<?php
include 'function.php';
$newName = $_POST['Name'];
$res = quest();
$res[] = $newName;
$str = implode ("\n", $res);
$file = __DIR__.'/Quest.txt';
if ( file_put_contents($file, $str)==true) {
 header('Location: kniga.php');   
}
else 
    echo 'Oops';
?>