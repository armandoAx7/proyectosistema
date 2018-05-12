<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$serieentrega=$_REQUEST['serieentrega'];


$query="UPDATE entregalaptop SET serieimpresora='$serie' WHERE serieentrega='$serieentrega'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verprohddlap.php?serieentrega=$serieentrega ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verproimp.php" 
                </script>'; 
    
    
}


$asignado='si';

$query="UPDATE regimpresora SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   
    
    header ("Location: verprohddlap.php?serieentrega=$serieentrega ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verproimp.php" 
                </script>'; 
            }


?>