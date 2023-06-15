<?php

class FiltrarUrl {
    private $url;
    private $urls;
    public function __construct () {
        $url = $_SERVER['REQUEST_URI'];
        $url = trim($url,'/');
        $this->url = $url;
    }
    public function url () {
        return $this->url;
    }
    public function saveUrl ($url) {
        $this->urls[] = $url;
    }
    public function urls () {
        return $this->urls;
    }
}