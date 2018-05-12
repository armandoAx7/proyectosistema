<?php

session_start();
include("conexion.php");
    //recibir datos y almacenar las variables
     
$folio=$_POST['folio'];
$fecha=$_POST['fecha'];
$seriecomp=$_POST['seriecomp'];

$fechaentrega=$_POST['fechaentrega'];
$motivo=$_POST['motivo'];
$observacionesusuarios=$_POST['observacionuser'];
$softwares='';
if (isset($_POST['opcion'])) {
    $softwares= implode(',',$_POST['opcion']);
    # code...
}

//consulta para insertar
$insertar="INSERT INTO formatoasignacion(folio,fecha,serie,softwares,fechaentrega,motivos,observacionesusuario) VALUES ('$folio','$fecha','$seriecomp','$softwares','$fechaentrega','$motivo','$observacionesusuarios')";

//verificar que el usuario no se repita
$verificar_folio =mysqli_query ($conexion,"SELECT * FROM formatoasignacion WHERE folio='$folio'");

if(mysqli_num_rows($verificar_folio)>0){
    
    
  echo '<script >
                    alert("el dispositivo se ha asignado");
                 window.location="menu.php" 
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
                   alert("el dispositivo se ha asignado");
                 window.location="menu.php" 
                
                </script>'; 
    
}


//cerrar conexion
mysqli_close($conexion);






?>