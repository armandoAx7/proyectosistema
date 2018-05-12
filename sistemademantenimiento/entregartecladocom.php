<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$seriecomp=$_REQUEST['seriecomp'];
$seriecpu=$_REQUEST['seriecpu'];
$seriemonitor=$_REQUEST['seriemonitor'];





$query="UPDATE equipodecomputo SET seriet='$serie' WHERE seriecomp='$seriecomp'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verpromouse.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$serie");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verprolap.php" 
                </script>'; 
    
    
}



$asignado='si';

$query="UPDATE regteclado SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   
    
    header ("Location: verpromouse.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$serie");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verproteclado.php" 
                </script>'; 
            }



?>