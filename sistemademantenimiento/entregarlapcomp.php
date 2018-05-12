<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$serieentrega=$_REQUEST['serieentrega'];





$query="UPDATE entregalaptop SET serielap='$serie' WHERE serieentrega='$serieentrega'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verpromonitorlap.php?serieentrega=$serieentrega ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verprolap.php" 
                </script>'; 
    
    
}

$asignado='si';

$query="UPDATE reglaptop SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   
    
    header ("Location:verpromonitorlap.php?serieentrega=$serieentrega ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verprolap.php" 
                </script>'; 
    
    
}






?>