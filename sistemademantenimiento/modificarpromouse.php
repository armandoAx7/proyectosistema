<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];

$fecha=$_POST['fecha'];



$query="UPDATE regmouse SET marca='$marca',modelo='$modelo',fecha='$fecha' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: vermouse.php");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" vermouse.php" 
                </script>'; 
    
    
}










?>