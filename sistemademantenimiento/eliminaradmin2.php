<?php

include("conexion.php");

$id=$_REQUEST['id'];


$query="DELETE FROM administrador WHERE id='$id'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: listadmin2.php");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al eliminar al administrador");
                 window.location=" listadmin2.php" 
                </script>'; 
    
    
}


?>