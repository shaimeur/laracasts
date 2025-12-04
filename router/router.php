<?php


if($_SERVER["REQUEST_URI"] === '/'){
    require "./controllers/home.php" ;
}
elseif($_SERVER["REQUEST_URI"] === '/contact'){
    require "./controllers/contact.php" ;
}elseif($_SERVER["REQUEST_URI"] === '/about'){
    require "./controllers/about.php" ;
}
else{
    http_response_code(404) ;
    echo "Page Not Found" ;
}