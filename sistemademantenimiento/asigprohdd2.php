<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$capacidad=$_POST['capacidad'];


$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];



$query="UPDATE reghdd SET marca='$marca',modelo='$modelo',color='$color',capacidad='$capacidad',fecha='$fecha' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verprohdd.php");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verprohdd.php" 
                </script>'; 
    
    
}










?>