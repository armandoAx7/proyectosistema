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
$insertar= "INSERT INTO bajaimp (`folio`, `serie`, `modelo`, `fechabaja`, `observaciones`) VALUES ('$folio', '$serie', '$modelo', '$fechabaja', '$observaciones')";
//verificar que el usuario no se repita
$verificar_hdd =mysqli_query ($conexion,"SELECT * FROM bajaimp WHERE serie='$serie' ");

if(mysqli_num_rows($verificar_hdd)>0){
    
       header("Location:bajaimpre.php");
    
    
    
  echo '<script >
                    alert("el dispositivo ya se ha dado de baja");
                 window.location="bajaimpre.php" 
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
                    alert("se ha dado de baja al dispositivo");
               window.location="bajaimpre.php" 
                </script>'; 
    
}




$query="UPDATE reghdd SET estado='$estado' WHERE serie='$serie'";
$resultado=$conexion->query($query);

if($resultado){
    
   
    echo '<script >
                    alert("se dio de baja al dispositivo");
                 window.location=" bajaimpre.php" 
                </script>'; 
    
    
    
    
    
}else {
    
    echo '<script >
                    alert("ocurrio un error al dar de baja al dispositivo");
                 window.location=" verimp.php" 
                </script>'; 
    
    
}



?>