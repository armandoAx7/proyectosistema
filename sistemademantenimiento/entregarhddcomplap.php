<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$serieentrega=$_REQUEST['serieentrega'];





$query="UPDATE entregalaptop SET seriehdd='$serie' WHERE serieentrega='$serieentrega'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verproreg-nbrklap.php?serieentrega=$serieentrega");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verprohdd.php" 
                </script>'; 
    
    
}

$asignado='si';

$query="UPDATE reghdd SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   
    
    header ("Location: verproreg-nbrklap.php?serieentrega=$serieentrega ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verprohdd.php" 
                </script>'; 
            }
            


?>