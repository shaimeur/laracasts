<?php
require "./utiles/utiles.php" ;

$uri = explode("?",$_SERVER["REQUEST_URI"])[0] ;
// dd($uri);
// echo(explode("?",$uri)[0]);
$router = ['/'=>'home','/contact'=>'contact','/about'=>'about'] ;


$found = false;

foreach($router as $route =>$controller){
    if($uri === $route){
        $found = true;
        require "./controllers/$controller.php";
        break;
    }
}
if(!$found){
    http_response_code(404) ;
    require "./views/404.php" ;
}



// if($uri === '/'){
//     require "./controllers/home.php" ;
// }
// elseif($uri === '/contact'){
//     require "./controllers/contact.php" ;
// }elseif($uri === '/about'){
//     require "./controllers/about.php" ;
// }
// else{
//     http_response_code(404) ;
//     echo "Page Not Found" ;
// }