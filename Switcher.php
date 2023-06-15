<?php
$urls = $endpoint->urls();
$urlExists = false;
for ($i = 0; $i < count($urls); $i++) {
    if($endpoint->url() == $urls[$i]){
        $urlExists = true;
        break;
    }
} 

if ($urlExists) {
    switch ($endpoint->url()) {
        case "login": 
            $path = "./content/login.php"; 
            require_once './template.php';
        break;
        case "register": 
            $path = "./content/register.php";
            require_once './template.php';
        break;
    }
} else {
    $path = "./content/home.php";
    require_once './template.php';
}