<?php

include_once 'model/nave.php';

//include_once 'clases/Nave.php';
include_once 'clases/Robotica.php';
include_once 'clases/Tripulada.php';
include_once 'clases/Lanzadera.php';


class control {
    
    public $MODEL;
    public $bd;

    public function __construct($bd)
    {
        $this->MODEL = new nave($bd);
    }
    public function index() {
        include_once 'view/home.php';
       
     
    }

    public function nuevo() {
        include_once 'view/save.php';
        
    }

    public function seleccionarBd() {
        include_once 'view/seleccionarBd.php';
        
    }

    public function guardarNave() {

        if(isset($_REQUEST['Tipo'])) {
            $tipo_nave = $_REQUEST['Tipo'];

            switch($tipo_nave) {
                case "Lanzadera";
                $nave = new Lanzadera();
                $nave->combustibleTipo = $_POST['txtCombustibleTipo'];
            $nave->combustibleMaterial = $_POST['txtCombustibleMaterial'];
                break;

                case "Robotica";
                $nave = new Robotica();
               $nave->combustibleTipo = $_POST['txtCombustibleTipo'];
             $nave->combustibleMaterial = $_POST['txtCombustibleMaterial'];
             
                break;

                case "Tripulada";
                $nave = new Tripulada();
            $nave->velocidadOrbitaje = $_POST['txtVelocidadOrbitaje'];
            $nave->capacidadTripulantes = $_POST['txtCapacidadTripulantes'];
                break;
            }
            $nave->unidadMedidaMasa = $_POST['cbxUnidadMedidaMasa'];
            $nave->nombre = $_POST['txtNombre'];
            $nave->paisOrigen = $_POST['txtPaisOrigen'];
            $nave->fechaActividad = $_POST['txtFechaActividad'];
            $nave->cantidadEmpuje = $_POST['txtCantidadEmpuje'];
            $nave->cantidadPeso = $_POST['txtCantidadPeso'];
            $nave->funcion = $_POST['txtFuncion'];
            //$nave = new Robotica();
           // $nave = new Tripulada();
           
            $this->MODEL->insertarNave($nave);
            header("Location: index.php");
    
        }

       
    }

  


    public function naveInformacion() {
        
        include_once 'view/naveInformacion.php';
    }
    

   
}


?>