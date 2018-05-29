<?php

class WelcomeController extends ControladorBase{

    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function Index()
    {

        $blocks=new Block($this->adapter);
        $allblocks=$blocks->getAllByPosition();
        
        $this->view("index",array(
            "allblocks"=>$allblocks,
            "tag"      => "Home"
        ));
    }

    public function Nex()
    {
        $this->view("New", array());
       echo 'you are in next view';
    }
    
    public function nada()
    {
       echo "Nada";
    }
}

?>