<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$seriecomp=$_REQUEST['seriecomp'];
$seriecpu=$_REQUEST['seriecpu'];
$seriemonitor=$_REQUEST['seriemonitor'];

$seriet=$_REQUEST['seriet'];
$seriemouse=$_REQUEST['seriemouse'];

$query="UPDATE equipodecomputo SET serieimpresora='$serie' WHERE seriecomp='$seriecomp'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verprohdd.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$seriemouse&serieimpresora=$serie ");
    
    
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
    
   
   
    
    header ("Location: verprohdd.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$seriemouse&serieimpresora=$serie ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verproimp.php" 
                </script>'; 
            }


?>