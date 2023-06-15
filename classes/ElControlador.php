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
            case 'public': require_once LasConstantes::PATH().'templates/LaPlantilla.html';break;
            case "public/pages/$title": 
                $switch = null;
                $lbdd = new LaBaseDeDatos;
                if ($title === "Primer") {
                    $primer = $lbdd->first();
                    $switch = 1;
                } else if ($title ==="Todos") {
                    $todos = $lbdd->all();
                    $switch = 2;
                }
                require_once LasConstantes::PATH().'templates/LaPlantillaTituloDinamico.php';break;
            default: require_once LasConstantes::PATH().'templates/LaPlantilla404.html';
        }
    }
}