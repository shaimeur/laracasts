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

    $books = [
                ['bookName' => "The Clean Coder", 'author' => "John Doe",'price' => 1000],
                ['bookName' => 'Uml the good practice', 'author' => "Nick larcen",'price' => 2000],
                ['bookName' => 'La formule de dieu !!', 'author' => "John Red",'price' => 3000],
            ] ;



?>

<ul>

    <?php
        foreach ($books as $book)  : ?>
            <li> <?= $book["bookName"]  , "Price " .$book["price"] ?></li>
       <?php endforeach ?>


</ul>

<?=  $books[1]["price"] ; ?>
</body>
</html>