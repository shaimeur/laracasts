<?php

$heading = 'About' ;

function dd($value){

    echo "<pre>" ;
    var_dump($value);
    echo "</pre>" ;
    die();
}
// dd($_SERVER["REQUEST_URI"]);

require "./views/about.view.php" ;

