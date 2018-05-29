<?php
class BlocksModel extends ModeloBase{
    private $table;
    
    public function __construct($adapter){
        $this->table="content_blocks";
        parent::__construct($this->table, $adapter);
    }
    
    
    public function unableBlock($id)
    {
        $query= "UPDATE content_blocks SET activation = '0'";
    }
}
?>