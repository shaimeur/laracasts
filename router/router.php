<?php
require "./utiles/utiles.php" ;

$uri = parse_url($_SERVER["REQUEST_URI"])["path"] ;
// dd($uri);
// var_dump(explode("?",$uri));
$router = ['/'=>'home','/contact'=>'contact','/about'=>'about'] ;


$found = false;

foreach($router as $route =>$controller){
    if($uri === $route){
        $found = true;
        require "./controllers/$controller.php";
        break;
    }
}
if($found == false){

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