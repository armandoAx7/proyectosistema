<?php

session_start();
include("conexion.php");
    //recibir datos y almacenar las variables 
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$serie= $_POST['serie'];
$color= $_POST['color'];
$seriecargador= $_POST['seriecargador'];
$procesador= $_POST['procesador'];
$tamanohdd= $_POST['tamanohdd'];
$tamanoram= $_POST['tamanoram'];
$tiposo=$_POST['tiposo'];
$fecha= $_POST['fecha'];
$maclan= $_POST['maclan'];
$macwlan=$_POST['macwlan'];
$remotopass= $_POST['remotopass'];   
$estado="activo";
$asignado="no";
$tipodisp="disp-com";


//consulta para insertar
$insertar="INSERT INTO regdisp(marca,modelo,serie,color,seriecargador,procesador,tamanohdd,tamanoram,tiposo,maclan,macwlan,remotopass,fecha,estado,asignado,tipodisp) VALUES ('$marca','$modelo','$serie','$color','$seriecargador','$procesador','$tamanohdd','$tamanoram','$tiposo','$maclan','$macwlan','$remotopass','$fecha','$estado','$asignado','$tipodisp')";

//verificar que el usuario no se repita
$verificar_serie =mysqli_query ($conexion,"SELECT * FROM regdisp WHERE serie='$serie'");

if(mysqli_num_rows($verificar_serie)>0){
    
    
  echo '<script >
                    alert("el dispositivo se ha registrado");
                 window.location="agregardisp-comp.php" 
                </script>'; 
    
}






//ejecutar la consulta
$resultado= mysqli_query($conexion,$insertar);
if(!$resultado){
    
    echo '<script type="text/javascript">
                    swal({ 
                        title:"¡Ocurrió un error inesperado!", 
                        text:"No se pudo registrar el dispositivo, por favor intente nuevamente", 
                        type: "error", 
                        confirmButtonText: "Aceptar" 
                    });
                </script>';
    
   
    
}else {
    
    
   echo '<script type="text/javascript" >
                    alert("el dispositivo se ha registrado");
               window.location="agregardisp-comp.php" 
                </script>'; 
    
}


//cerrar conexion
mysqli_close($conexion);






?>