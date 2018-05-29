<?php
class LoginController extends ControladorBase{
private $adapter;
private $conectar;

public function __construct() {
    parent:: __construct();

    $this->conectar=new Conectar();
    $this->adapter=$this->conectar->conexion();
}

public function Index()
{
   echo "Site under construction";
}

public function Identifier()
{
    if(isset($_POST['identifier'])){

        $identifier = new Identifier($this->adapter);
        $identifier->setEmailUser($_POST['emailuser']);

        $login=$identifier->saveuser();
        
    }
    $this->view("test",array(
        
    ));
}
}

?>