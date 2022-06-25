
<?php

 abstract class Nave {
    public int $id;
    public String $nombre;
    public String $paisOrigen;
    public String $fechaActividad;
    public int $cantidadEmpuje;
    public int $cantidadPeso;
    public String $funcion;

    function __construct() {
        
    }

    

   //METODO ABSTRACTO PARA SETTEAR EL TIPO DE MEDIDA QUE SE VA A UTILIZAR PARA LOS
   //ATRIBUTOS cantidadEmpuje && cantidadPeso
   //Kg - Tm

    abstract function setUnidadMedidaMasa(String $unidadMedida);
    
    abstract function showMessageNaveInformation();






    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of paisOrigen
     */ 
    public function getPaisOrigen()
    {
        return $this->paisOrigen;
    }

    /**
     * Set the value of paisOrigen
     *
     * @return  self
     */ 
    public function setPaisOrigen($paisOrigen)
    {
        $this->paisOrigen = $paisOrigen;

        return $this;
    }

    /**
     * Get the value of fechaActividad
     */ 
    public function getFechaActividad()
    {
        return $this->fechaActividad;
    }

    /**
     * Set the value of fechaActividad
     *
     * @return  self
     */ 
    public function setFechaActividad($fechaActividad)
    {
        $this->fechaActividad = $fechaActividad;

        return $this;
    }

    /**
     * Get the value of cantidadEmpuje
     */ 
    public function getCantidadEmpuje()
    {
        return $this->cantidadEmpuje;
    }

    /**
     * Set the value of cantidadEmpuje
     *
     * @return  self
     */ 
    public function setCantidadEmpuje($cantidadEmpuje)
    {
        $this->cantidadEmpuje = $cantidadEmpuje;

        return $this;
    }

    /**
     * Get the value of cantidadPeso
     */ 
    public function getCantidadPeso()
    {
        return $this->cantidadPeso;
    }

    /**
     * Set the value of cantidadPeso
     *
     * @return  self
     */ 
    public function setCantidadPeso($cantidadPeso)
    {
        $this->cantidadPeso = $cantidadPeso;

        return $this;
    }

    /**
     * Get the value of funcion
     */ 
    public function getFuncion()
    {
        return $this->funcion;
    }

    /**
     * Set the value of funcion
     *
     * @return  self
     */ 
    public function setFuncion($funcion)
    {
        $this->funcion = $funcion;

        return $this;
    }
}

?>