<?PHP   

session_start();
include("conexion.php");
$folio=$_POST['folio'];
$seriecomp=$_POST['seriecomp'];
$fechamantenimiento=$_POST['fechamantenimiento'];
$fallas=$_POST['fallas'];
$respaldodatos=$_POST['respaldodatos'];
$anomalias=$_POST['anomalias'];
$proxmantenimiento=$_POST['proxmantenimiento'];
$observaciones=$_POST['observaciones'];
$complementario='';
if (isset($_POST['Sistema'])) {
    $complementario= implode(',',$_POST['Sistema']);
    # code...
}


$insertar="INSERT INTO formatomantenimiento(folio,fechamantenimiento,seriecomp,fallas,respaldodatos,anomalias,proxmantenimiento,observaciones,complementario) VALUES ('$folio','$fechamantenimiento','$seriecomp','$fallas','$respaldodatos','$anomalias','$proxmantenimiento','$observaciones','$complementario')";

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
                   alert("el dispositivo se ha asignado");
                 window.location="menu.php" 
                
                </script>'; 
    
}


//cerrar conexion
mysqli_close($conexion);









?>