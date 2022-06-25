<?php

class nave {

    public $CNX;

    public function __construct($bd_selected) 
    {
        try {
            $this->CNX = conexion::conectar($bd_selected);
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar($palabra) {

        if(!strlen($palabra) < 1){
            $query="SELECT * FROM naves WHERE 
            id_nave LIKE '%$palabra%' OR tipo LIKE '%$palabra%' OR nombre LIKE '%$palabra%' OR pais_origen LIKE '%$palabra%' OR fecha_actividad LIKE '%$palabra%' OR cantidad_empuje LIKE '%$palabra%' OR cantidad_peso LIKE '%$palabra%' OR funcion LIKE '%$palabra%'";

        } else {
        $query = "SELECT id_nave, tipo, nombre, pais_origen, funcion from naves";
        }
        try{

           
            $smt = $this->CNX->prepare($query);
            $smt->execute();

            return $smt->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e) {
            die($e->getMessage());
        }
        
    }

    public function listarPorId($id) {
       
        try{

            $query = "SELECT n.id, n.nombre FROM naves n INNER join lanzaderas l on n.id_nave = l.id_nave
            from naves";
            $smt = $this->CNX->prepare($query);
            $smt->execute();

            return $smt->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertarNave(Nave $data) {

        if($data instanceof Lanzadera) {
            try{
               

                $query = "INSERT INTO naves(tipo,nombre,pais_origen,fecha_actividad,
                cantidad_empuje,cantidad_peso,funcion) VALUES (?,?,?,?,?,?,?)";
                
                $this->CNX->prepare($query)->execute(array("Lanzadera", $data->nombre, $data->paisOrigen, $data->fechaActividad, $data->cantidadEmpuje, $data->cantidadPeso, $data->funcion));
                $last_id = $this->CNX->lastInsertId();
                
                $query = "INSERT INTO lanzaderas(descripcion,combustible_tipo,combustible_material,unidad_medida_masa,
                id_nave) VALUES (?,?,?,?,?)";
                $descripcion = $data->showMessageNaveInformation();
                
                $this->CNX->prepare($query)->execute(array($descripcion, $data->combustibleTipo, $data->combustibleMaterial, $data->unidadMedidaMasa, $last_id));


            }catch(Exception $e) {
               
            }
        } elseif($data instanceof Robotica) {

            $query = "INSERT INTO naves(tipo,nombre,pais_origen,fecha_actividad,
                cantidad_empuje,cantidad_peso,funcion) VALUES (?,?,?,?,?,?,?)";
                
                $this->CNX->prepare($query)->execute(array("Robotica", $data->nombre, $data->paisOrigen, $data->fechaActividad, $data->cantidadEmpuje, $data->cantidadPeso, $data->funcion));
                $last_id = $this->CNX->lastInsertId();
                
                $query = "INSERT INTO roboticas(descripcion,combustible_tipo,combustible_material,unidad_medida_masa,
                id_nave) VALUES (?,?,?,?,?)";
                $descripcion = $data->showMessageNaveInformation();
                
                $this->CNX->prepare($query)->execute(array($descripcion, $data->combustibleTipo, $data->combustibleMaterial, $data->unidadMedidaMasa, $last_id));

        } elseif($data instanceof Tripulada) {

            $query = "INSERT INTO naves(tipo,nombre,pais_origen,fecha_actividad,
                cantidad_empuje,cantidad_peso,funcion) VALUES (?,?,?,?,?,?,?)";
                
                $this->CNX->prepare($query)->execute(array("Tripulada", $data->nombre, $data->paisOrigen, $data->fechaActividad, $data->cantidadEmpuje, $data->cantidadPeso, $data->funcion));
                $last_id = $this->CNX->lastInsertId();
                
                $query = "INSERT INTO tripuladas(descripcion,velocidad_orbitaje,capacidad_tripulantes,unidad_medida_masa,
                id_nave) VALUES (?,?,?,?,?)";
                $descripcion = $data->showMessageNaveInformation();
                
                $this->CNX->prepare($query)->execute(array($descripcion, $data->velocidadOrbitaje, $data->capacidadTripulantes, $data->unidadMedidaMasa, $last_id));

        } 
        
        
    }

    public function obtenerNaveInformacion($id, $tipo_nave) {

        switch($tipo_nave) {
          case "Lanzadera":
            $query = "SELECT * FROM naves 
             INNER JOIN lanzaderas ON naves.id_nave = lanzaderas.id_nave AND naves.id_nave = $id AND lanzaderas.id_nave = $id";
            break;

            case "Robotica":
                $query = "SELECT * FROM naves
                INNER JOIN roboticas ON naves.id_nave = roboticas.id_nave AND naves.id_nave = $id AND roboticas.id_nave = $id";
                break;

                case "Tripulada":
                    $query = "SELECT * FROM naves
                    INNER JOIN tripuladas ON naves.id_nave = tripuladas.id_nave AND naves.id_nave = $id AND tripuladas.id_nave = $id";
                    break;

                  
        }
        try{
            
           
            $smt = $this->CNX->prepare($query);
            $smt->execute();

            return $smt->fetch(PDO::FETCH_OBJ);

        }catch(Exception $e) {
            die($e->getMessage());
        }
    }
    }


?>