<?php

session_start();
include("conexion.php");
    //recibir datos y almacenar las variables 

$marca= $_POST['marca'];
$modelo= $_POST['modelo'];
$serie= $_POST['serie'];

$fecha= $_POST['fecha'];

$estado="activo";
$asignado="no";
$tipodisp="mouse";

//consulta para insertar
$insertar="INSERT INTO regmouse(marca,modelo,serie,fecha,estado,asignado,tipodisp) VALUES ('$marca','$modelo','$serie','$fecha','$estado','$asignado','$tipodisp')";

//verificar que el usuario no se repita
$verificar_serie =mysqli_query ($conexion,"SELECT * FROM regmouse WHERE serie='$serie'");

if(mysqli_num_rows($verificar_serie)>0){
    
    
  echo '<script >
                    alert("el dispositivo se ha registrado");
                 window.location="agregarmause.php" 
                </script>'; 
    
}






//ejecutar la consulta
$resultado= mysqli_query($conexion,$insertar);
if(!$resultado){
    
    echo '<script type="text/javascript">
                    swal({ 
                        title:"¡Ocurrió un error inesperado!", 
                        text:"No se pudo registrar el dispositivo, por favor intente nuevamente", 
                        type: "error", 
                        confirmButtonText: "Aceptar" 
                    });
                </script>';
    
   
    
}else {
    
    
   echo '<script type="text/javascript" >
                    alert("el dispositivo se ha registrado");
               window.location="agregarmause.php" 
                </script>'; 
    
}


//cerrar conexion
mysqli_close($conexion);






?>