<?php

session_start();
include("conexion.php");
    //recibir datos y almacenar las variables 
$claveuser=$_POST['claveuser'];
$serie=$_POST['serie'];
$folio= $_POST['folio'];
$fechaasignacion= $_POST['fechaasignacion'];



//consulta para insertar
$insertar="INSERT INTO entregaproductos(folio,seriecpu,claveuser,fechaentrega) VALUES ('$folio','$serie','$claveuser','$fechaasignacion')";








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
                    alert("el dispositivo se ha asignado");
               window.location="verprocpu.php" 
                </script>'; 
    
}


//cerrar conexion
mysqli_close($conexion);






?>