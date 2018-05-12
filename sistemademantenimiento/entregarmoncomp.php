<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$seriecomp=$_REQUEST['seriecomp'];
$seriecpu=$_REQUEST['seriecpu'];
 




$query="UPDATE equipodecomputo SET seriemonitor='$serie' WHERE seriecomp='$seriecomp'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verproteclado.php?seriecomp=$seriecomp&seriecpu=$serie&seriemonitor=$serie ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verprolap.php" 
                </script>'; 
    
    
}

$asignado='si';

$query="UPDATE regmonitor SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   
    
    header ("Location: verproteclado.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$serie");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verpromonitor.php" 
                </script>'; 
            }


?>