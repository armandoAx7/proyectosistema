<?php

session_start();
include("conexion.php");
    //recibir datos y almacenar las variables 
$claveuser=$_POST['claveuser'];
$serie=$_POST['serie'];
$tdisp= $_POST['tdisp'];
$proyecto= $_POST['proyecto'];
$fecharegistro= $_POST['fecharegistro'];
$seriecpu= $_POST['regcpu'];
$seriedisp= $_POST['regdisp'];
$seriehdd= $_POST['reghdd'];
$serieimpresora= $_POST['regimpresora'];
$seriemonitor= $_POST['regmonitor'];
$seriemouse= $_POST['regmouse'];
$regnbrk= $_POST['regnbrk'];
$seriet= $_POST['regteclado'];




//consulta para insertar
$insertar="INSERT INTO equipodecomputo(seriecomp,claveuser,tipodispositivo,proyecto,fecharegistro,seriecpu,seriedisp,seriehdd,serieimpresora,seriemonitor,seriemouse,seriereg,seriet) VALUES ('$serie','$claveuser','$tdisp','$proyecto','$fecharegistro','$seriecpu','$seriedisp','$seriehdd','$serieimpresora','$seriemonitor','$seriemouse','$regnbrk','$seriet')";

//verificar que el usuario no se repita

             
  
                   

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
    
        header ("Location: verprocpu.php?seriecomp=$serie");      
    
   echo '<script type="text/javascript" >
                    alert("se ha guardado la informacion correctamente");
               

                </script>';
    
    
   
}


//cerrar conexion
mysqli_close($conexion);





?>









