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
                $users = new LosUsuarios;
                if ($title === "Primer") {
                    $primer = $users->first();
                    $switch = 1;
                } else if ($title ==="Todos") {
                    $todos = $users->all();
                    $switch = 2;
                } else if(is_numeric($title)) {
                    $porId = $users->find($title);
                    $switch = 3;
                    if (empty($porId)) {
                        require_once LasConstantes::PATH().'templates/LaPlantilla404.html';
                        die();
                    }
                } else {
                    require_once LasConstantes::PATH().'templates/LaPlantilla404.html';
                    die();
                }
                require_once LasConstantes::PATH().'templates/LaPlantillaContenidoDinamico.php';
            break;
            case "public/login":require_once LasConstantes::PATH().
            'templates/LaPlantillaContenidoDinamico.php';
            break;
            default: require_once LasConstantes::PATH().'templates/LaPlantilla404.html';
        }
    }
}