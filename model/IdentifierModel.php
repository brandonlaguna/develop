<?php

class IdentifierModel extends ModeloBase{
    private $table;

    public function __construct($adapter) {
        $this->table= "identifier";
        parent:: __construct($this->table,$adapter);
    }
public function saveuser(){
        $query = "INSERT INTO `identifier` (`id`,`KeyToken`,`KeyLost`,`EmailUser`,`AutoPass`,`IP`,`LastAccess`,`Activate`)
            VALUES(NULL,
            '".$this->KeyToken."',
            ".$this->KeyLost."',
            ".$this->EmailUser."',
            ".$this->AutoPass."',
            ".$this->IP."',
            ".$this->LastAccess."',
            ".$this->Activate."');";

            $saveuser =$this->db()->query($query);
            if($saveuser){
                $status ="User Was Successfully Created.";
            }
            return $saveuser;
    }
    public function loginvalidation(){
        
        $query="SELECT * FROM identifier WHERE EmailUser = '".$this->EmailUser."' AND KeyToken ";
    }

}

?>