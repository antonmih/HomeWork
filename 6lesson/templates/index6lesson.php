<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>OOP</title>
</head>
<body>
    <h1>Гостевая книга:</h1>
    <hr>
    
    <?php foreach ($data as $line) { ?>
    <article><?php echo $line->getMessage(); ?></article>
    <?php } ?>
</body>
</html>