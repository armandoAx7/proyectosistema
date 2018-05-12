







<?php

session_start();
include("conexion.php");
    //recibir datos y almacenar las variables 
$claveuser=$_POST['claveuser'];
$serie=$_POST['serie'];
$tdisp= $_POST['tdisp'];
$proyecto= $_POST['proyecto'];
$fecharegistro= $_POST['fecharegistro'];
$serielaptop= $_POST['reglaptop'];
$seriedisp= $_POST['regdisp'];
$seriehdd= $_POST['reghdd'];
$serieimpresora= $_POST['regimpresora'];
$seriemonitor= $_POST['regmonitor'];
$seriemouse= $_POST['regmouse'];
$regnbrk= $_POST['regnbrk'];





//consulta para insertar
$insertar="INSERT INTO entregalaptop(serieentrega,claveuser,tipodispositivo,proyecto,fecharegistro,serielap,seriedisp,seriehdd,serieimpresora,seriemonitor,seriemouse,seriereg) VALUES ('$serie','$claveuser','$tdisp','$proyecto','$fecharegistro','$serielaptop','$seriedisp','$seriehdd','$serieimpresora','$seriemonitor','$seriemouse','$regnbrk')";

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
    
             
    
   echo '<script type="text/javascript" >
                    alert("se ha guardado la informacion correctamente");
               

                </script>';
    
     header ("Location: verprolap.php?serieentrega=$serie");
   
}


//cerrar conexion
mysqli_close($conexion);





//window.location.assing('verprocpu.php?seriecomp='+"<?php echo row3['seriecomp'];?>");
?>









