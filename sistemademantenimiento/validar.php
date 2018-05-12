<?php

session_start();



$id=$_POST['id'];
$passwor=$_POST['passwor'];
$privilegio=$_POST['privilegio'];

//conectar base de datos 

include("conexion.php");



$validar = $conexion-> query ("SELECT*FROM administrador WHERE id='$id'AND passwor='$passwor'AND privilegio='$privilegio'");


if($resultado = mysqli_fetch_array($validar)){
  $_SESSION['u_privilegio']=$privilegio;
  $_SESSION['u_id']=$id;
  header("Location: menu.php");
    
}
else {
    header("Location:index.php");
    
}


?> 