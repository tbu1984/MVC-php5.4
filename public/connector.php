<?php


defined('BASEPATH') or define('BASEPATH', dirname(realpath(__FILE__)) . '/../' );
defined('PKGPATH') or define('PKGPATH', BASEPATH . 'packeges/');
defined('CREATEPATH') or define('COREPATH',PKGPATH . 'Pulse/' );
defined('APPATH') or define('APPATH', PKGPATH . 'app/');


if ( ! function_exists('bootstrap_autoloader'))
{
    function bootstrap_autoloader()
    {
    require ('COREPATH'. 'Classes/autoloader.php');
    pulse\core\autoloader::setInculdePath(PKGPATH);
    pulse\core\autoloader::register();
    
    autoloader::add_classes(array)(
            "pulse\\core\\pulse" => PKGPATH . 'pulse/classes/pulse.php'
            
            ));
    
    alias($array(
        
           "pulse\\core\\autoloader" => 'autoloader',
           "pulse\\core\\pulse"      =>'pulse' 
     ));
    
     pulse::random();
    
   }
}

if ( !function_exists('alias'))
{
    function alias($array)
    {
        foreach ($array as $class => $alias)
        {
            class_alias($class, $alias);
        }
            
    }
}
bootstrap_autoloader();

