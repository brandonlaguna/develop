<?php
class Form extends EntidadBase{
    private $id;
    private $Activate;
    private $Postponed;
    private $NameClient;
    private $LastNameClient;
    private $AddressClient;
    private $Date;
    Private $DateEntered;
    private $DateEdited;
    private $Message;
    private $Message2;
    private $EmailClient;
    private $PhoneClient;
    private $EnableMsj;
    private $City;
    private $TypeDate;

    public function __construct($adapter) {
        $table ="scheduled_appointments";
        parent:: __construct($table, $adapter);
    }

    public function getid()
    {
        return $this->id;
    }
    public function Setid($id)
    {
        $this->id = $id;
    }
    public function getActivate()
    {
        return $this->Activate;
    }
    public function SetActivate($Activate)
    {
        $this->Activate = $Activate;
    }
    public function getPostponed()
    {
        return $this->Postponed;
    }
    public function SetPostponed($Postponed)
    {
        $this->Postponed = $Postponed;
    }
    public function getNameClient()
    {
        return $this->NameClient;
    }
    public function SetNameClient($NameClient)
    {
        $this->NameClient = $NameClient;
    }
    public function getLastNameClient()
    {
        return $this->LastNameClient;
    }
    public function SetLastNameClient($LastNameClient)
    {
        $this->LastNameClient = $LastNameClient;
    }
    public function getAddressClient()
    {
        return $this->AddressClient;
    }
    public function SetAddressClient($AddressClient)
    {
        $this->AddressClient = $AddressClient;
    }
    public function getDate()
    {
        return $this->Date;
    }
    public function SetDate($Date)
    {
        $this->Date = $Date;
    }
    public function getDateEntered()
    {
        return $this->DateEntered;
    }
    public function SetDateEntered($DateEntered)
    {
        $this->DateEntered = $DateEntered;
    }
    public function getMessage()
    {
        return $this->Message;
    }
    public function SetMessage($Message)
    {
        $this->Message = $Message;
    }
    //msg 2

    public function getMessage2()
    {
        return $this->Message2;
    }
    public function SetMessage2($Message2)
    {
        $this->Message2 = $Message2;
    }
    public function getEmailClient()
    {
        return $this->EmailClient;
    }
    public function SetEmailClient($EmailClient)
    {
        $this->EmailClient = $EmailClient;
    }
    public function getPhoneClient()
    {
        return $this->EmailClient;
    }
    public function SetPhoneClient($PhoneClient)
    {
        $this->PhoneClient = $PhoneClient;
    }
    public function getEnableMsj()
    {
        return $this->EnableMsj;
    }
    public function SetEnableMsj($EnableMsj)
    {
        $this->EnableMsj = $EnableMsj;
    }
    public function getCity()
    {
        return $this->City;
    }
    public function SetCity($City)
    {
        $this->City = $City;
    }
    public function getTypeDate()
    {
        return $this->TypeDate;
    }
    public function SetTypeDate($TypeDate)
    {
        $this->TypeDate = $TypeDate;
    }


    public function savedate(){
        $query ="INSERT INTO `scheduled_appointments` (`id`,`Activate`,`Postponed`,`NameClient`,`LastNameClient`,`AddressClient`,`Date`,`DateEntered`,`Message`,`Message2`,`EmailClient`,`PhoneClient`,`EnableMsj`,`City`,`TypeDate`)
        VALUES (NULL,
                '".$this->Activate."',
                '".$this->Postponed."',
                '".$this->NameClient."',
                '".$this->LastNameClient."',
                '".$this->AddressClient."',
                '".$this->Date."',
                '".$this->DateEntered."',
                '".$this->Message."',
                '".$this->Message2."',
                '".$this->EmailClient."',
                '".$this->PhoneClient."',
                '".$this->EnableMsj."',
                '".$this->City."',
                '".$this->TypeDate."')";
            
       $savedate=$this->db()->query($query);
       if($savedate){
           $status ="Appointments Was Successfully Created.";
       }
       return $savedate;
    
    }

    public function updatedate($id){
        $query ="UPDATE `scheduled_appointments` SET
        `Activate`       =    '".$this->Activate."',
        `PostPoned`      =    '".$this->PostPoned."',
        `NameClient`     =    '".$this->NameClient."',
        `LastNameClient` =    '".$this->LastNameClient."',
        `AddressClient`  =    '".$this->AddressClient."',
        `Date`           =    '".$this->Date."',
        `DateEntered`    =    '".$this->DateEntered."',
        `DateEdited`     =    '".$this->DateEdited."',
        `Message`        =    '".$this->Message."',
        `EmailClient`    =    '".$this->EmailClient."',
        `PhoneClient`    =    '".$this->PhoneClient."',
        `EnableMsj`      =    '".$this->EnableMsj."',
        `City`           =    '".$this->City."',
        `TypeDate`       =    '".$this->TypeDate."' WHERE id = $id;";
    $updatedate =$this->db()->query($query);
    return $updatedate;
    }

    public function deletedate($id){
        $query ="UPDATE `scheduled_appointments` SET `Activate` = '0' WHERE id = $id";
        $deletedate = $this->db()->query($query);
        return $deletedate;
    }
}
?>