<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$seriecomp=$_REQUEST['seriecomp'];






$query="UPDATE equipodecomputo SET seriecpu='$serie' WHERE seriecomp='$seriecomp'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verpromonitor.php?seriecomp=$seriecomp&seriecpu=$serie ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verprocpu.php" 
                </script>'; 
    
    
}

$asignado='si';

$query="UPDATE regcpu SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   
    
    header ("Location: verpromonitor.php?seriecomp=$seriecomp&seriecpu=$serie");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verprocpu.php" 
                </script>'; 
    
    
}






?>