<?php

class ElControlador {
    public function __construct ($page) {
        $uri = $page;
        $title = explode('/',$uri);
        if (array_key_exists(2,$title)) {
            $title = $title[2];
        }else {
            $title = $title[0];
        }
        switch ($page) {
            case 'public': require_once 'C:/xampp/htdocs/templates/LaPlantilla.php';break;
            case "public/pages/$title": require_once 'C:/xampp/htdocs/templates/LaPlantillaTituloDinamico.php';break;
            default: require_once 'C:/xampp/htdocs/templates/LaPlantilla404.php';
        }
    }
}