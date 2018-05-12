<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$serieentrega=$_REQUEST['serieentrega'];



$query="UPDATE entregalaptop SET seriereg='$serie' WHERE serieentrega='$serieentrega'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verprodisplap.php?serieentrega=$serieentrega ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verproreg-nbrk.php?seriecomp=$seriecomp" 
                </script>'; 
    
    
}
$asignado='si';

$query="UPDATE regnbrk SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   
    
    header ("Location:  verprodisplap.php?serieentrega=$serieentrega ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verproreg-nbrk.php" 
                </script>'; 
            }


?>