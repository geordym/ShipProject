<?php

class Robotica extends Nave {

    public String $combustibleTipo;
    public String $combustibleMaterial;
    public $unidadMedidaMasa;
 

    function __construct() {
        
    }


    function showMessageNaveInformation()
    {
       return ("La nave " . $this->nombre . " fue creada en " . $this->paisOrigen .
       " su primera actividad fue en el año " . $this->fechaActividad .
        "tenia un empuje de " . $this->cantidadEmpuje . $this->unidadMedidaMasa . " . Esta servia para " . $this->funcion);;
    }

    

    


  
    

    

    /**
     * Get the value of unidadMedidaMasa
     */ 
    public function getUnidadMedidaMasa()
    {
        return $this->unidadMedidaMasa;
    }

    /**
     * Set the value of unidadMedidaMasa
     *
     * @return  self
     */ 
    public function setUnidadMedidaMasa($unidadMedidaMasa)
    {
        $this->unidadMedidaMasa = $unidadMedidaMasa;

        return $this;
    }

}
?>