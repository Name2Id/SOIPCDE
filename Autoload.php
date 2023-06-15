<?php
spl_autoload_register (function($class) {
    $ruta = "C:/xampp/htdocs/".$class.".php";
    if (file_exists($ruta)) {
        require_once $ruta;
    }
});