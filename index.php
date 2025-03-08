<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>



<h1>List of books </h1>
<?php

    $books = ["The Clean Coder",'Uml the good practice','La formule de dieu !!'] ;



?>

<ul>

    <?php
        foreach ($books as $book)  : ?>
            <li> <?= $book  ?></li>
       <?php endforeach ?>


</ul>
</body>
</html>