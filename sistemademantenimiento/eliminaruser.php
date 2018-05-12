<?php

include("conexion.php");

$claveuser=$_REQUEST['claveuser'];


$query="DELETE FROM usuario WHERE claveuser='$claveuser'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: listpersonal.php");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al eliminar al usuario");
                 window.location=" listpersonal.php" 
                </script>'; 
    
    
}


?>