<?php
session_start();
include("conexion.php");
    //recibir datos y almacenar las variables 
$proceso=$_POST['proceso'];
$claveuser=$_POST['claveuser'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$numerotel= $_POST['numerotel'];
$cargo=$_POST['cargo'];


//consulta para insertar
$insertar="INSERT INTO usuario (proceso,claveuser,nombre,apellido,numerotel,cargo) VALUES ('$proceso','$claveuser','$nombre','$apellido','$numerotel','$cargo')";

//verificar que el usuario no se repita
$verificar_usuario =mysqli_query ($conexion,"SELECT * FROM usuario WHERE claveuser='$claveuser' ");

if(mysqli_num_rows($verificar_usuario)>0){
    
    
  echo '<script >
                    alert("el usuario se ha registrado");
                 window.location="personal.php" 
                </script>'; 
    
}






//ejecutar la consulta
$resultado= mysqli_query($conexion,$insertar);
if(!$resultado){
    
    echo '<script type="text/javascript">
                    swal({ 
                        title:"¡Ocurrió un error inesperado!", 
                        text:"No se pudo registrar al usuario, por favor intente nuevamente", 
                        type: "error", 
                        confirmButtonText: "Aceptar" 
                    });
                </script>';
    
   
    
}else {
    
    
   echo '<script type="text/javascript" >
                    alert("el usuario se ha registrado");
               window.location="personal.php" 
                </script>'; 
    
}


//cerrar conexion
mysqli_close($conexion);


?>