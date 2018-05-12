<?php 



include("conexion.php");

$id=$_REQUEST['id'];

$email=$_POST['email'];
$nombre=$_POST['nombre'];

$query="UPDATE administrador SET email='$email',nombre='$nombre'WHERE id='$id'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: listadmin.php");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar al administrador");
                 window.location=" listadmin.php" 
                </script>'; 
    
    
}










?>