<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];



$query="UPDATE regnbrk SET marca='$marca',modelo='$modelo', descripcion='$descripcion',fecha='$fecha' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: ver-reg-nbrk.php");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" ver-reg-nbrk.php" 
                </script>'; 
    
    
}










?>