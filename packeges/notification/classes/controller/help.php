<?php
class help extends controller {

    function __construct() {
        parent:: __construct();
        echo 'we are indsite help';
    }
        public function other($arg = false){
        echo 'this is an error';
        echo 'optional' . $arg;
        require 'packeges\notification\classes\model\help_model.php';
        $model = new help_model();
        
        }

}



