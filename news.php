<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>OOP</title>
</head>
<body>
    <h1>Новости:</h1>
    <hr>
    
    <?php foreach ($data as $line) { ?>
    <article><a href="arcticle.php?"><?php echo $line->getArticle(); ?></a></article>
    <?php } ?>
</body>
</html>