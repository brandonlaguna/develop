<?php
class Product extends EntidadBase{
    private $id;
    private $NameProduct;
    private $id_FamilyProduct;
    private $SerialProduct;
    private $ValueProduct;
    private $OriginProduct;
    private $DateEntered;
    private $Active;

    public function __construct($adapter) {
        $table ="product";
        parent:: __construct($table,$adapter);
    }

    public function GetId()
    { 
        return $this->id; 
    }
    public function SetId($id)
    { 
        $this->id =$id; 
    }
    public function GetNameProduct()
    { 
        return $this->NameProduct; 
    }
    public function SetNameProduct($NameProduct)
    {
        $this->NameProduct = $NameProduct;
    }
}
?>