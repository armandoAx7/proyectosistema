<?php 



include("conexion.php");


$proceso=$_POST['proceso'];
    $claveuser=$_POST['claveuser'];


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numerotel=$_POST['numerotel'];
$cargo=$_POST['cargo'];

$query="UPDATE `usuario` SET `proceso`='$proceso',`nombre`='$nombre',`apellido`='$apellido',`numerotel`='$numerotel',`cargo`='$cargo' where claveuser = '$claveuser'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: listpersonal.php");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar al administrador");
                 window.location=" personal.php" 
                </script>'; 
    
    
}










?>