<?php
class LaClase implements LaInterface {
    private static array $LaRuta = [
        'GET' => [],
        'POST' => []
    ];
    public static function ElProcesamientoDeLaRuta () {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = trim($uri,'/');
        $error = true;
        foreach (self::$LaRuta[$method] as $route => $callback) {
            if(strpos($route,':') !== false) {
               $route = preg_replace ('#:[a-zA-Z]+#','([a-zA-Z]+)',$route);
            }
            if (preg_match("#^$route$#",$uri, $match)) {
                $param = array_slice ($match,1);
                $response = $callback(...$param);
                $error = false;
                return $response;
            }
        }
        if ($error) {
            new ElControlador($uri);
        }
    }
}