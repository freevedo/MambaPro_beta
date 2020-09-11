<?php 

//redefinir l'url pour la rendre plus propre 
define('URL',str_replace("index.php","",(isset($_SERVER['HTTPS'])?"https" : "http"). "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once('controllers/Router.php');
$router = new Router();
$router->routeReq();


// $url = '';

// if(isset($_GET['url'])){
//     $url = $_GET['url'];
// }
// else{
//   $url = 'home';
// }

// ob_start();

// if ($url === 'home')
// {
//   require ('views/home.php');
// }
// else if($url === 'apply'){
//   require ('views/apply.php');
// }
// else if($url === 'portfolio'){
//   require('views/portfolio-details.php');
// }
// $content = ob_get_clean();

// require('templates/default.php');