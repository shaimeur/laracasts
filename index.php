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

$filterByKeyValue = function ($arr, $key, $value) {

    $filteredArr = [] ;

    foreach ($arr as $item ){

        if($item[$key] == $value) {
            $filteredArr[] = $item ;
        }
    }
    return $filteredArr ;
};
$myFilter = $filterByKeyValue($books, 'author', "John Red");



require "index.view.php";


