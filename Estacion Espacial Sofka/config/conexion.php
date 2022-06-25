<?php



class conexion {

    public static function conectar($bd_selected) {
       switch($bd_selected) {
           case "MYSQL":
            $x = new PDO("mysql: host=localhost; dbname=estacion_espacial; charset=utf8","root","");
            break;
            case "SQLITE":
         $x = new PDO("sqlite:SQLite.sqlite");
           break;

       }
     
      
      

        $x->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $x;
    }
}


?>