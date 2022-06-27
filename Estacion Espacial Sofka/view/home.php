
<?php

    $busqueda = "";
    if(isset($_REQUEST['busqueda'])) {
      $busqueda = $_REQUEST['busqueda'];
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
      
      <a class="navbar-brand" href="?c=index"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> Estacion Espacial Repositorio <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
            <input name="busqueda" id="busqueda" class="form-control mr-sm-2" type="search" placeholder="Saturno-Solar-Quimico-Tripulada" aria-label="Search">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar nave</button>
          </form>
      </div>
    </nav>

    <div class="container">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->
              <form method="post" action="?c=GuardarNave&Tipo=Lanzadera" id="task-form-naves">
                <div class="form-group">
                  <h5>Tipo de nave</h5>
                  <select id="tipoNave" onchange="comprobar()" class="form-control">
                  <option value="LANZADERA">LANZADERA</option>
                    <option value="ROBOTICA">ROBOTICA</option>           
                    <option value="TRIPULADA">TRIPULADA</option>
                </select>
                </div>
                <div class="form-group">
                  <h5>Nombre</h5>
                  <input required name="txtNombre" type="text" id="name" placeholder="Discovery-Challenger-Apolo" class="form-control">
                </div>

                <div class="form-group">
                  <h5>Pais de origen</h5>
                  <input required name="txtPaisOrigen" type="text" id="name" placeholder="EU/CHINA/RUSSIA" class="form-control">
                </div>

                <div class="form-group">
                  <h5>Fecha de actividad</h5>
                  <input required name="txtFechaActividad" type="year" id="name" placeholder="1995/1896" class="form-control">
                </div>

                <div class="form-group">
                  <h5>Cantidad de empuje</h5>
                  <input required name="txtCantidadEmpuje" type="number" id="name" placeholder="195/2000" class="form-control">
                  <select id="unidad-medida" class="form-control">
                    <option>Kg</option>
                    <option>Tm</option>
                  
                </select>
                </div>

                <div class="form-group">
                  <h5>Cantidad de peso</h5>
                  <input required name="txtCantidadPeso"type="number" id="name" placeholder="500/2000" class="form-control">
                  <select name="cbxUnidadMedidaMasa" id="unidad-medida" class="form-control">
                    <option>Kg</option>
                    <option>Tm</option>
                  
                </select>
                </div>
                
                <div class="form-group">
                <h5>Funcion</h5>
                  <textarea required name="txtFuncion" id="description" cols="30" rows="5" class="form-control" placeholder="Ejemplo: Esta nave sirve para llevar y traer cosas del espacio"></textarea>
                </div>

                <div class="form-group">
                  <h5 id="h5-form1">Tipo de combustible</h5>
                  <input required name="txtCombustibleTipo" type="text" id="input-form1" placeholder="Quimico-Solar-Electrico" class="form-control">
                 
                </div>

                <div class="form-group">
                  <h5 id="h5-form2">Combustible material </h5>
                  <input required name = "txtCombustibleMaterial" id="input-form2" type="text" placeholder="Petroleo/Oxigeno liquido/dimetilhidracina/Hidrogeno" class="form-control">
                 
                </div>



               
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Guardar Nave
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-7">
       

          <table class="table table-bordered table-secondary table-sm">
            <thead>
              <tr>
                <th class="table-dark" >ID</th>
                <th class="table-dark" >Tipo</th>
                <th class="table-dark" >Nombre</th>
                <th class="table-dark" >Pais Origen</th>
                <th class="table-dark" >Funcion</th>
                <th class="table-dark" >Operaciones</th>
                
              </tr>
           
            
            </thead>

            <tbody>
            <?php 
            
            foreach($this->MODEL->listar($busqueda) as $fila) : 
            
            
            ?>
                <td><?php echo $fila->id_nave ?></td>
                <td><?php echo $fila->tipo ?></td>
                <td><?php echo $fila->nombre?></td>
                <td><?php echo $fila->pais_origen?></td>
                <td><?php echo $fila->funcion?></td>
               
                <td><a class="btn btn-warning" href="?tipo=<?php echo $fila->tipo ?>&c=naveInformacion&id=<?php echo $fila->id_nave ?>">Ver Mas</a></td>
              
                <tr></tr>

                <?php endforeach; ?>
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
<script src="resources/js/home.js"></script>
</body>


</html>