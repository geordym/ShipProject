<?php


class Lanzadera extends Nave {

    public $combustibleTipo;
    public $combustibleMaterial;
    public $unidadMedidaMasa;
  

    function __construct() {
        
    }

   

   function showMessageNaveInformation()
    {
       return ("La nave " . $this->nombre . " fue creada en " . $this->paisOrigen .
       " su primera actividad fue en el año " . $this->fechaActividad .
        "tenia un empuje de " . $this->cantidadEmpuje . $this->unidadMedidaMasa . " . Esta servia para " . $this->funcion);;
    }

        
    
    
    

    //GETTERS AND SETTERS

  

    /**
     * Get the value of combustibleTipo
     */ 
    public function getCombustibleTipo()
    {
        return $this->combustibleTipo;
    }

    /**
     * Set the value of combustibleTipo
     *
     * @return  self
     */ 
    public function setCombustibleTipo($combustibleTipo)
    {
        $this->combustibleTipo = $combustibleTipo;

        return $this;
    }

    /**
     * Get the value of combustibleMaterial
     */ 
    public function getCombustibleMaterial()
    {
        return $this->combustibleMaterial;
    }

    /**
     * Set the value of combustibleMaterial
     *
     * @return  self
     */ 
    public function setCombustibleMaterial($combustibleMaterial)
    {
        $this->combustibleMaterial = $combustibleMaterial;

        return $this;
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
