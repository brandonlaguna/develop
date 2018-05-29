<?php

class BlockController extends ControladorBase{
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function index()
    {
        $blocks=new Block($this->adapter);
        $allblocks=$blocks->getAll();
        
        $this->view("index",array(
            "allblocks"=>$allblocks,
            "tag"      => "Home"
        ));
    }
    
    

}

?>