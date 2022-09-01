<?php 

//DOS POSIBLES CONEXIONES
//PARA CONECTAR A MYSQL: $bd = "MYSQL";
//PARA CONECTAR A SQLITE: $bd = "SQ-LITE";

$bd = "MYSQL";

include_once 'controller/control.php';
include_once 'config/conexion.php';

$Controller = new control($bd);

if(!isset($_REQUEST['c'])){
    $Controller->index();
} else {
    $action = $_REQUEST['c'];
    call_user_func(array($Controller, $action));
}

?>