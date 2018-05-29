<?php
class Identifier extends EntidadBase{

    private $id;
    private $KeyToken;
    private $KeyLost;
    private $EmailUser;
    private $AutoPass;
    private $IP;
    private $LastAccess;
    private $Activate;

    public function __construct($adapter) {
        $table = "identifier";
        parent:: __construct($table,$adapter);
    }

    public function getid()
    {
     return $this->id;
    }
    public function setid($id)
    {
        $this->id = $id;
    }
    public function getKeyToken()
    {
     return $this->KeyToken;
    }
    public function setKeyToken($KeyToken)
    {
        $this->KeyToken = $KeyToken;
    }
    public function getKeyLost()
    {
     return $this->KeyLost;
    }
    public function setKeyLost($KeyLost)
    {
        $this->KeyLost = $KeyLost;
    }
    public function getEmailUser()
    {
     return $this->EmailUser;
    }
    public function setEmailUser($EmailUser)
    {
        $this->EmailUser = $EmailUser;
    }
    public function getAutoPass()
    {
     return $this->AutoPass;
    }
    public function setAutoPass($AutoPass)
    {
        $this->AutoPass = $AutoPass;
    }
    public function getIP()
    {
     return $this->IP;
    }
    public function setIP($IP)
    {
        $this->IP = $IP;
    }
    public function getLastAccess()
    {
     return $this->$LastAccess;
    }
    public function setLastAccess($LastAccess)
    {
        $this->LastAccess = $LastAccess;
    }
    public function getAactivate()
    {
     return $this->Activate;
    }
    public function setActivate($Activate)
    {
        $this->Activate = $Activate;
    }


}


?>