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
$seriereg=$_REQUEST['seriereg'];



$query="UPDATE equipodecomputo SET seriedisp='$serie' WHERE seriecomp='$seriecomp'";
$resultado=$conexion->query($query);

if($resultado){
    
    
    header ("Location: formatodeasignacion.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$seriemouse&serieimpresora=$serieimpresora&seriehdd=$seriehdd&seriereg=$seriereg&seriedisp=$serie");
    
    
     echo '<script >
                    alert("se han agregado todos los dispositivos seleccionados correctamente");
                 
                </script>';
    
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verproreg-nbrk.php?seriecomp=$seriecomp" 
                </script>'; 
    
    
}
$asignado='si';

$query="UPDATE regdisp SET asignado='$asignado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
   header ("Location:  formatodeasignacion.php?seriecomp=$seriecomp&seriecpu=$seriecpu&seriemonitor=$seriemonitor&seriet=$seriet&seriemouse=$seriemouse&serieimpresora=$serieimpresora&seriehdd=$seriehdd&seriereg=$seriereg&seriedisp=$serie ");
    
    echo '<script >
                    alert("se han agregado todos los dispositivos seleccionados correctamente");
                 
                </script>';
    
    
    
}else {
    
     echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verproreg-nbrk.php?seriecomp=$seriecomp" 
                </script>'; 
            }


?>