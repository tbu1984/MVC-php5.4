
<?php

namespace pulse\core;

class pulse {

    public static function random() {

        function __contruct() {

            $url = explode('/', $_GET['url']);
            $url = rtrim($url);

            require 'pulse/' . $url[0] . '.php';
            if (file_exists($file)) {
                require '$file';


                require 'pulse/classes/error/error1.php';
                $controller = new error();
                return false;
            }

            $controller = new $url[0];

            if (isset($url[2])) {
                $controller->$url[1]($url[2]);
                return false;
            } else {

                if (isset($url[1])) {
                    $controller->$url[1]();
                    return false;
                } else {
                    $controller->index();
                }
            }
        }

    }

}
?>





