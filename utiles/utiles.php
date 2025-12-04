<?php
// die and dump!!
function dd($value){

    echo "<pre>" ;
    var_dump($value);
    echo "</pre>" ;
    die();
}


function activePage($uri){

    echo $_SERVER["REQUEST_URI"] === $uri ? "bg-gray-950/50 text-white" :"text-gray-300 hover:bg-white/5 hover:text-white";

}
