<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];
$serieentrega=$_REQUEST['serieentrega'];



$query="UPDATE entregalaptop SET seriedisp='$serie' WHERE serieentrega='$serieentrega'";
$resultado=$conexion->query($query);

if($resultado){
    header ("Location: formatodeasignacionlap.php?serieentrega=$serieentrega");
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
    
   
    header ("Location:  formatodeasignacionlap.php?serieentrega=$serieentrega ");
    
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