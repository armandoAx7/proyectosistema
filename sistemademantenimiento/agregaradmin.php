<?php
session_start();
include("conexion.php");
    //recibir datos y almacenar las variables 
$id=$_POST['id'];
$passwor=$_POST['passwor'];
$email= $_POST['email'];
$nombre= $_POST['nombre'];
$privilegio= $_POST['privilegio'];


//consulta para insertar
$insertar="INSERT INTO administrador(id,passwor,email,nombre,privilegio) VALUES ('$id','$passwor','$email','$nombre','$privilegio')";

//verificar que el usuario no se repita
$verificar_usuario =mysqli_query ($conexion,"SELECT * FROM administrador WHERE id='$id' ");

if(mysqli_num_rows($verificar_usuario)>0){
    
    
  echo '<script >
                    alert("el usuario se ha registrado");
                 window.location="admin.php" 
                </script>'; 
    
}






//ejecutar la consulta
$resultado= mysqli_query($conexion,$insertar);
if(!$resultado){
    
    echo '<script type="text/javascript">
                    swal({ 
                        title:"¡Ocurrió un error inesperado!", 
                        text:"No se pudo registrar el administrador, por favor intente nuevamente", 
                        type: "error", 
                        confirmButtonText: "Aceptar" 
                    });
                </script>';
    
   
    
}else {
    
    
   echo '<script type="text/javascript" >
                    alert("el usuario se ha registrado");
               window.location="admin.php" 
                </script>'; 
    
}


//cerrar conexion
mysqli_close($conexion);


?>