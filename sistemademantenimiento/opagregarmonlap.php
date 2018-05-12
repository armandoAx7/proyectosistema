<?php     

include("conexion.php");
$serieentrega=$_REQUEST['serieentrega'];
$seriemonitor=$_REQUEST['seriemonitor'];


$activar ='activado';
$asignado='no';
$seleccion= "SELECT seriemonitor FROM entregalaptop WHERE serieentrega ='$serieentrega'";
$query="UPDATE regmonitor SET asignado='$asignado',estado='$activar' WHERE serie='$seleccion'";
$resultado=$conexion->query($query);


if($resultado) {
    

    
    $query2="UPDATE entregalaptop SET seriemonitor='$seriemonitor' WHERE serieentrega='$serieentrega'";
    

    header ("Location: proasignuevos.php?seriecomp=$seriecomp&seriecpu=$serie ");
    
}
else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 
                </script>'; 
    
    
}


?>