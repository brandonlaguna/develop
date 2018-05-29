<?php
require_once 'config/web_config.php';
//global funtions
require_once 'config/global.php';

//base for controllers
require_once 'core/ControladorBase.php';

//functions for frontal controller
require_once 'core/ControladorFrontal.func.php';

//get controllers and actions
require_once '_construct/heading/heading.php';
if(isset($_GET["controller"])){
    
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}

?>

