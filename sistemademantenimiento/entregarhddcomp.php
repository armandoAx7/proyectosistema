<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$seriecomp=$_REQUEST['seriecomp'];
$seriecpu=$_REQUEST['seriecpu'];
$seriemonitor=$_REQUEST['seriemonitor'];

$seriet=$_REQUEST['seriet'];
$seriemouse=$_REQUEST['seriemouse'];
$serieimpresora=$_REQUEST['serieimpresora'];




$query="UPDATE equipodecomputo SET seriehdd='$serie' WHERE seriecomp='$seriecomp'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verproreg-nbrk.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$seriemouse&serieimpresora=$serieimpresora&seriehdd=$serie");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verprohdd.php" 
                </script>'; 
    
    
}

$asignado='si';

$query="UPDATE reghdd SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   
    
    header ("Location: verproreg-nbrk.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$seriemouse&serieimpresora=$serieimpresora&seriehdd=$serie ");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verprohdd.php" 
                </script>'; 
            }
            


?>