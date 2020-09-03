<?php 

require ('models/Autoloader.php');

Autoloader::register();

$url = '';

if(isset($_GET['url'])){
    $url = $_GET['url'];
}
else{
  $url = 'home';
}

ob_start();

if ($url === 'home')
{
  require ('views/home.php');
}
else if($url === 'apply'){
  require ('views/apply.php');
}
else if($url === 'portfolio'){
  require('views/portfolio-details.php');
}
$content = ob_get_clean();

require('templates/default.php');