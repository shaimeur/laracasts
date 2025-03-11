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
                [
                        'bookName' => "The Clean Coder",
                        'author' => "John Doe",
                         'price' => 1000,
                        'realseYear' => 2003
                ],
                [
                        'bookName' => 'Uml the good practice',
                        'author' => "Nick larcen",
                        'price' => 2000,
                        'realseYear' => 2003
                ],
                [
                        'bookName' => 'La formule de dieu !!',
                         'author' => "John Red",
                         'price' => 3000,
                         'realseYear' => 2003
                ],
            ] ;

    function filterBooksByAuthor($books,$author){
    foreach ($books as $book ){
        if($book['author'] == $author) {
      return $book["bookName"] . " " . $book["price"];
            }
      }
    }

?>

<ul>




            <li> <?=  filterBooksByAuthor($books,"John Red")?></li>




</ul>



</body>
</html>