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
        case "login": echo "Login page"; break;
        case "register": echo "Register page"; break;
    }
} else {
    require_once './template.php';
}