<?php 



include("conexion.php");

$serie=$_REQUEST['serie'];

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$seriecargador=$_POST['seriecargador'];
$procesador=$_POST['procesador'];
$tamanohdd=$_POST['tamanohdd'];
$tamanoram=$_POST['tamanoram'];
$maclan=$_POST['maclan'];
$macwlan=$_POST['macwlan'];
$remotopass=$_POST['remotopass'];
$tiposo=$_POST['tiposo'];
$fecha=$_POST['fecha'];



$query="UPDATE regdisp SET marca='$marca',modelo='$modelo',color='$color',seriecargador='$seriecargador',procesador='$procesador',tamanohdd='$tamanohdd',tamanoram='$tamanoram',maclan='$maclan',macwlan='$macwlan',remotopass='$remotopass',tiposo='$tiposo',fecha='$fecha' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
    header ("Location: verdisp.php");
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al modificar datos del dispositivo");
                 window.location=" verdisp.php" 
                </script>'; 
    
    
}










?>