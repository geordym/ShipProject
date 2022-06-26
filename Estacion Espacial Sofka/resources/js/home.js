

var $h5_form1 = document.getElementById("h5-form1");
var $h5_form2 = document.getElementById("h5-form2");


var $input_form1 = document.getElementById("input-form1");
var $input_form2 = document.getElementById("input-form2");

var $task_form_naves = document.getElementById("task-form-naves");

function comprobar() {

   var $seleccion = document.getElementById("tipoNave").value;
   
  
    switch($seleccion) {
        case "TRIPULADA":
        tripulada();
    
        break;

        case "ROBOTICA":
        robotica();
      
        break;

        case "LANZADERA":
        lanzadera();
       
        break;


    }
}


function lanzadera() {
    
    $h5_form1.textContent = "Tipo de combustible";
    $h5_form2.textContent = "Material de combustible";
    $input_form1.placeholder = "Quimico-Solar-Electrico";
    $input_form2.placeholder = "Petroleo/Oxigeno liquido/dimetilhidracina/Hidrogeno";
    
   

    $input_form1.name = "txtCombustibleTipo";
    $input_form2.name = "txtCombustibleMaterial";

    $task_form_naves.action = "?c=GuardarNave&Tipo=Lanzadera";

}



function robotica() {
    $h5_form1.textContent = "Tipo de combustible";
    $h5_form2.textContent = "Material de combustible";

    $input_form1.placeholder = "Solar";
    $input_form2.placeholder = "Energia producia por el sol";

    $task_form_naves.action = "?c=GuardarNave&Tipo=Robotica";

    $input_form1.name = "txtCombustibleTipo";
    $input_form2.name = "txtCombustibleMaterial";
}

function tripulada() {
    $h5_form1.textContent = "Velocidad de orbitaje KM/H";
    $h5_form2.textContent = "Capacidad de tripulantes";

    $input_form1.placeholder = "2000";
    $input_form2.placeholder = "1-10";

    $task_form_naves.action = "?c=GuardarNave&Tipo=Tripulada";

    $input_form1.name = "txtVelocidadOrbitaje";
    $input_form2.name = "txtCapacidadTripulantes";
}