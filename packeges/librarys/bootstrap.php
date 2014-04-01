<?php

class bootstrap {

    function __construct() {
        $url = $_REQUIRE ['url'] ?  $_REQUIRE ['url'] : NULL;
        $url = rtrim($url, '/');
        $url = explode('/', $url);


        $file = 'controller/' . [0] . 'php';
        if (file_exists($file)) {
            require $file;
        } else {
            require 'packeges\notification\classes\controller\error.php';
            $controller = new Error();
            return false;
        }
        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }

}

?>