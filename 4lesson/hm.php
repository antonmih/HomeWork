<?php

$res = fopen(__DIR__ . '/bd.txt','r');

while (!feof($res)) {
    $str = fgets($res);   
    echo $str;
}

fclose($res);

$file = file(__DIR__ . '/bd.txt');
$file[] = 'Tie';
$str = implode("\n", $file);
file_put_contents(__DIR__ . '/bd.txt',$str);

?>

<form action="upload.php" method="post"  enctype="multipart/form-data">
<input type="file" name="newimage">
<input type="submit">
</form>