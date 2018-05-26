<?php
require __DIR__.'/class/View.php';
$gb = new View;
$gb->assign('data','2');
$gb->assign('data','23');
$gb->assign('var','fff');
$gb->Display('/templates/index.php');
?>