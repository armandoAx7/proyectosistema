<?php

session_start();
include("conexion.php");

$serie=$_REQUEST['serie'];
$folio=$_POST['folio'];
$modelo=$_REQUEST['modelo'];
$fechabaja=$_POST['fechabaja'];
$observaciones=$_POST['observaciones'];
$estado=$_POST['estado'];






//consulta para insertar
$insertar= "INSERT INTO bajadisp (`folio`, `serie`, `modelo`, `fechabaja`, `observacion`) VALUES ('$folio', '$serie', '$modelo', '$fechabaja', '$observaciones')";
//verificar que el usuario no se repita
$verificar_disp =mysqli_query ($conexion,"SELECT * FROM bajadisp WHERE serie='$serie' ");

if(mysqli_num_rows($verificar_disp)>0){
    
        header ("Location: bajadisp.php");
    
  echo '<script >
                    alert("el dispositivo se ha dado de baja");
                 window.location="bajadisp.php" 
                </script>'; 
    
}






//ejecutar la consulta
$resultado= mysqli_query($conexion,$insertar);
if(!$resultado){
    
    echo '<script type="text/javascript">
                    swal({ 
                        title:"¡Ocurrió un error inesperado!", 
                        text:"No se pudo dar de baja, por favor intente nuevamente", 
                        type: "error", 
                        confirmButtonText: "Aceptar" 
                    });
                </script>';
    
   
    
}else {
    
    
   echo '<script type="text/javascript" >
                    alert("el dispositivo se ha dado de baja");
               window.location="bajadisp.php" 
                </script>'; 
    
}




$query="UPDATE regdisp SET estado='$estado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   echo '<script >
                    alert("el dispositivo se ha dado de baja");
                 window.location="bajadisp.php" 
                </script>'; 
   
    

    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" bajadisp.php" 
                </script>'; 
    
    
}



?>