<?php
spl_autoload_register (function($class) {
    $ruta = "C:/xampp/htdocs/".$class.".php";
    if (file_exists($ruta)) {
        require_once $ruta;
    } else {
        require_once 'C:/xampp/htdocs/require/LaPlantilla404Clase.html';
        die ();
    }
});