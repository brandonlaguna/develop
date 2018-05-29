<?php
class UsuariosModel extends ModeloBase{
    private $table;
    
    public function __construct($adapter){
        $this->table="usuarios";
        parent::__construct($this->table, $adapter);
    }
    
    //Metodos de consulta
    public function getUnUsuario(){
        $query="SELECT * FROM usuarios";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
?>
