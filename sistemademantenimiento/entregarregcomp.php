<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$seriecomp=$_REQUEST['seriecomp'];
$seriecpu=$_REQUEST['seriecpu'];
$seriemonitor=$_REQUEST['seriemonitor'];

$seriet=$_REQUEST['seriet'];
$seriemouse=$_REQUEST['seriemouse'];
$serieimpresora=$_REQUEST['serieimpresora'];
$seriehdd=$_REQUEST['seriehdd'];




$query="UPDATE equipodecomputo SET seriereg='$serie' WHERE seriecomp='$seriecomp'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verprodisp.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$seriemouse&serieimpresora=$serieimpresora&seriehdd=$seriehdd&seriereg=$serie ");
    
    
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
    
   
   
    
    header ("Location: verprodisp.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$seriemouse&serieimpresora=$serieimpresora&seriehdd=$seriehdd&seriereg=$serie ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verproreg-nbrk.php" 
                </script>'; 
            }


?>