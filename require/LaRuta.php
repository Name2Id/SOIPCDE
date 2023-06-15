<?php

LaClase::ElMetodoGETPOST('GET','/',function () {
    /**
     * El header es una especie de comunicacion
     * entre el navegador y la extension seven json viewer
     *  porque
     * antes de colocar el header y el tipo de contenido
     * el navegador no utilizaba la extension 
     * para visualizar formatos json por pantalla.
     */
    #aqui mira.
    #header("Content-Type: application/json");#esto es el header. 
    new ElControlador('/public/');
});
//el siguiente fragmento de codigo siempre va al final.
LaClase::ElMetodoGETPOST('GET','/pages/:page',function ($page) {
    new ElControlador("/pages/$page");
});

echo (LaClase::ElProcesamientoDeLaRuta());