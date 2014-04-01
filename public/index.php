<?php
require '\public\connector.php';
require 'packeges\librarys\bootstrap.php';
require 'packeges\librarys\controller.php';
require 'C:packeges\librarys\database.php';
$app = new bootstrap();

?>


<!DOCTYPE html>
<html>
<head>


</head>
<body>
<?php
//index text 

class index extends controller {

    function index() {
        parrent::controller();
    }
    function index_text()
    {
        $this->load->controller('index_text');
    }

}

?>




</body>
</html>
