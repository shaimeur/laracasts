<?php

$heading = 'Home' ;

function dd($value){

    echo "<pre>" ;
    var_dump($value);
    echo "</pre>" ;
    die();
}
// dd($_SERVER["REQUEST_URI"]);




require "./views/index.view.php";





