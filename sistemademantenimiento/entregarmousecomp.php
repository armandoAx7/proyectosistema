<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$seriecomp=$_REQUEST['seriecomp'];
$seriecpu=$_REQUEST['seriecpu'];
$seriemonitor=$_REQUEST['seriemonitor'];

$seriet=$_REQUEST['seriet'];




$query="UPDATE equipodecomputo SET seriemouse='$serie' WHERE seriecomp='$seriecomp'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verproimp.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$serie ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verprolap.php" 
                </script>'; 
    
    
}


$asignado='si';

$query="UPDATE regmouse SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   
    
    header ("Location: verproimp.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$serie ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verpromouse.php" 
                </script>'; 
            }


?>