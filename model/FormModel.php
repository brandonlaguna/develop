<?php
class FormModel extends ModeloBase{
    private $table;

    public function __construct($adapter) {
        $this->table ="scheduled_appointments";
        parent:: __construct($this->table,$adapter);
    }

    //Form list by actives upcoming events
    public function upcomingevents(){
        //get actua datetime on MYSQL Format
        $actualdate = date("Y-m-d H:i:s"); 
        $query="SELECT * FROM scheduled_appointments WHERE `Activate` = 1 AND `Date` > $actualdate"; 
        $upcomingevents=$this->db()->query($query);
        return $upcomingevents;
    }

    
}

?>