
<html>
    <head>
    <title> KNIGA </title>
    </head>
<body>
    
    <?php
    include 'function.php';
$res = quest();
    
foreach ($res as $name) {
     echo $name; 
}
?>
    <br>
    <form name="New" action="script.php" method="post">
        <input name="Name" type="text">
        <input type="submit" value="Zapisat">
    </form>
    </body>
</html>
