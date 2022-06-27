
<?php
class Tripulada extends Nave {


    //ATRIBUTOS
    public $velocidadOrbitaje;
    public $capacidadTripulantes;
    public $unidadMedidaMasa;
    //CONSTRUCTOR
    function __construct() {
        
    }
    //METODO ABSTRACTO PARA MOSTRAR PEQUEÑO MENSAJE
    function showMessageNaveInformation()
    {
       return ("La nave " . $this->nombre . " fue creada en " . $this->paisOrigen .
       " su primera actividad fue en el año " . $this->fechaActividad .
        "tenia una velocidad de orbitaje de " . $this->velocidadOrbitaje . "km/h". " y podia llevar una tripulacion de hasta " .$this->capacidadTripulantes . $this->unidadMedidaMasa . " . Esta servia para " . $this->funcion);;
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

    /**
     * Get the value of velocidadOrbitaje
     */ 
    public function getVelocidadOrbitaje()
    {
        return $this->velocidadOrbitaje;
    }

    /**
     * Set the value of velocidadOrbitaje
     *
     * @return  self
     */ 
    public function setVelocidadOrbitaje($velocidadOrbitaje)
    {
        $this->velocidadOrbitaje = $velocidadOrbitaje;

        return $this;
    }

    /**
     * Get the value of capacidadTripulantes
     */ 
    public function getCapacidadTripulantes()
    {
        return $this->capacidadTripulantes;
    }

    /**
     * Set the value of capacidadTripulantes
     *
     * @return  self
     */ 
    public function setCapacidadTripulantes($capacidadTripulantes)
    {
        $this->capacidadTripulantes = $capacidadTripulantes;

        return $this;
    }
}


?>