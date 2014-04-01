 
        pulse::random();
           
   
    }
}

if (!function_exists('alias')) {

    function alias($array) {
        foreach ($array as $class => $alias) {
            class_alias($class, $alias);
        }
    }

}


bootstrap_autoloader();

