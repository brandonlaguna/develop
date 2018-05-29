<?php
class FormController extends ControladorBase{
    private $conectar;
    private $adapter;
    
    public function __construct() {
        parent:: __construct();

        $this->conectar= new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function Index()
    {
        echo "site under construction";
    }

    public function newscheduled()
    {
        $this->view("newscheduled",array(
            "tag"    =>"Obtener una cita o reunion privada"
        ));
    }
    public function savedate(){
        if(isset($_POST['newscheduled'])){
        $form=new Form($this->adapter);
        //setting method POST
        $form->setActivate('1');
        $form->setPostponed('0');
        $form->setNameClient($_POST['first_name']);
        $form->setLastNameClient($_POST['last_name']);
        $form->setAddressClient($_POST['address']);
        $form->setDate(date('Y-m-d H:i:s',strtotime($_POST['scheduled_date'].$_POST['scheduled_time'])));
        $form->setDateEntered(date("Y-m-d H:i:s"));
        $form->setMessage($_POST['message']);
        $form->setMessage2($_POST['message2']);
        $form->setEmailClient($_POST['email']);
        $form->setPhoneClient($_POST['phone']);
        $form->setEnableMsj('1');
        $form->setCity($_POST['city']);
        $form->setTypeDate($_POST['']);
        //calling crud function and set all data
        $savedate=$form->savedate();
    }
        $this->redirect("Welcome","Index");
    }
    

}
?>