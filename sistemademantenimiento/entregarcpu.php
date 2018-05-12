<?php


include("conexion.php");

                    
            
            
$serie=$_REQUEST['serie'];
$seriecomp=$_REQUEST['seriecomp'];

$query="UPDATE equipodecomputo SET seriecpu='$serie' WHERE seriecomp='$seriecomp'";
$resultado=$conexion->query($query);

if($resultado){
    
    echo '<script >
                    alert("se ha entregado el  dispositivo");
                 window.location=" verpromonitor.php" 
                </script>';
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verprocpu.php" 
                </script>'; 
    
    
}









?>
