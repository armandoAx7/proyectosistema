<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];


$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];



$query="UPDATE regimpresora SET marca='$marca',modelo='$modelo',color='$color',descripcion='$descripcion',fecha='$fecha' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verimp.php");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verimp.php" 
                </script>'; 
    
    
}










?>