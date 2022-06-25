<?php 
if(isset($_GET['id']) && isset($_GET['tipo'])) {
    $id_nave = $_GET['id'];
    $tipo_nave = $_GET['tipo'];


}

?>



<!DOCTYPE html>
<html>
    <head>

    
    <title>Geordy Sofka Project</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
</head>

<body>


    <!-- NAVIGATION  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">ESTACION ESPACIAL REPOSITORIO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Solar/Spacex/Naves" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar nave</button>
          </form>
      </div>
    </nav>

    <div class="container">
      <div class="row p-7">
      

        <!-- TABLE  -->
        <div class="col-md-12 py-2">
         
          </div>

          <table class="table table-bordered table-sm">
            <thead>
              <tr class="table-info">
                <th>ID</th>
                <th>Nombre</th>
                <th>Pais Origen</th>
                <th>Fecha actividad</th>
                <th>Cantidad de empuje</th>
                <th>Cantidad de peso</th>
                <th>Funcion</th>
             <?php if(isset($_GET['tipo'])) {
              $tipo = $_GET['tipo'];
              switch($tipo) {
                case "Lanzadera":
                  echo "<th>Descripcion</th>";
                  echo "<th>Tipo de combustible</th>";
                  echo "<th>Material de combustible</th>";

                  break;

                  case "Robotica":
                  echo "<th>Descripcion</th>";
                  echo "<th>Tipo de combustible</th>";
                  echo "<th>Material de combustible</th>";
                    break;

                    case "Tripulada":
                      echo "<th>Descripcion</th>";
                      echo "<th>Velocidad de orbitaje</th>";
                      echo "<th>Capacidad de tripulantes</th>";
                      break;
              }
             } ?>
                
            
              
            </thead>
            <tbody id="naves" class="table-light">
            <?php 
            if(isset($tipo_nave) && isset($id_nave)){
             $nave =  $this->MODEL->obtenerNaveInformacion($id_nave, $tipo_nave);
               
                echo "<td>$id_nave</td>";
                echo "<td>$nave->nombre</td>";
                echo "<td>$nave->pais_origen</td>";
                echo "<td>$nave->fecha_actividad</td>";
                echo "<td>$nave->cantidad_empuje$nave->unidad_medida_masa</td>";
                echo "<td>$nave->cantidad_peso$nave->unidad_medida_masa</td>"; 
                echo "<td>$nave->funcion</td>";
                echo "<td>$nave->descripcion</td>";
                
                switch($tipo_nave) {
                 case "Lanzadera":
                  echo "<td>$nave->combustible_tipo</td>";
                  echo "<td>$nave->combustible_material</td>";
                  break;

                  case "Robotica":
                    echo "<td>$nave->combustible_tipo</td>";
                    echo "<td>$nave->combustible_material</td>";
                    break;

                    case "Tripulada":
                      echo "<td>$nave->velocidad_orbitaje Km/h</td>";
                echo "<td>$nave->capacidad_tripulantes</td>";
                      break;
                }
              
            }
              
            
            
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>


</html>