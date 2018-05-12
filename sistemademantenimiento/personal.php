<?php 

session_start();

if(isset($_SESSION['u_id'])){
    
    $_SESSION['privilegio'];
    
    
    
}else{
    
    header("Location:index.php");
}



      
    



?>



<!-- 
* Copyright 2017 TechCorr
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Personal administrativo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/img/techcorr-logo%20(1).png" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
               Departamento De TI
            </div>
            <div class="full-reset" style="background-color: #4682B4; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="assets/img/logo.jpg" alt="TechCorr" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Departamento De TI</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="menu.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <a href="mantenimiento.php"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; mantenimiento preventivo</a>
                       
                    </li>
                    
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <?php
                            if($_SESSION['u_privilegio']=='administrador2'){
                           echo ' 
                            <li><a href="personal.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; nuevo usuario</a></li>';
                            }
                            else if($_SESSION['u_privilegio']=='administrador'){
                            
                                echo '
                            <li><a href="personal.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; nuevo usuario</a></li>
                                
                                 <li><a href="admin.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>';
                            }
                            
                            
                            
                            
                            
                            
                            
                            
                            
                           
                           ?>
                        </ul> 
                    </li>
                   
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-shopping-cart"></i>&nbsp;&nbsp; productos de TI <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            
                            <li><a href="agregarpro.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; agregar productos</a></li>
                            <li><a href="verprodu.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; ver productos </a></li>
                            <li><a href="asignarproductos.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Asignacion de los productos</a></li>
                           
                        </ul>
                    </li>
                    <li><a href="reportes.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes </a></li>
                     <?php
                            if($_SESSION['u_privilegio']=='administrador2'){
                          
                            }
                            else if($_SESSION['u_privilegio']=='administrador'){
                            
                                echo '
                           
                                
                                 <li><a href="conf.php"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; restauracion y respaldo de BD</a></li>';
                            }
                            
                            
                            
                            
                            
                            
                            
                            
                            
                           
                           ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers full-cover-background" style="background-image:url(assets/img/grid-4.png);">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    
                    
               <span class="all-tittles"><?php echo $_SESSION['u_id']; ?></span>
                        
                        
                    
                    
                    
            
                    
                </li>
                <li  class="tooltips-general exit-system-button" data-href="logout.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
               
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
                                 
               <div class="page-header">
                <font color= #fff> 
                <h1 class="all-tittles" >Tecnologias De la información <small></small></h1>
                </font>
              
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
               
            
                <li role="presentation" class="active"><a href="personal.html">usuarios</a></li>
            
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user05.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    <font color= #fff> 
                    Bienvenido a la sección para registrar nuevo tipo de usuario. Para registrar al usuario debes de llenar todos los campos del siguiente formulario.
                        </font>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo tipo de usuario</li>
                      <li><a href="listpersonal.php">Listado de usuarios</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar nuevo usuario</div>
                <form action="agregarusuario.php" method="post" autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                           
                                            
                           
                            <font color= #FFFF00>
                                <h4>area del trabajador</h4>
                                     </font>
                               <div class="group-material">
                                
                <select name="proceso" class="material-control-login">
                  
                    <option value="" disabled="" selected=""></option>
                    <option value="TCA-AL" >TCA-AL</option>
                    <option value="TCS-CF" >TCS-CF</option>
                     <option value="TCS-GC" >TCS-GC</option>
                     <option value="TCS-GE" >TCS-GE</option>
                     <option value="TCS-OI" >TCS-OI</option>
                     <option value="TCS-OM" >TCS-OM</option>
                     <option value="TCS-RH" >TCS-RH</option>
                     <option value="TCS-SE" >TCS-SE</option>
                     <option value="TCS-SG" >TCS-SG</option>
                     <option value="TCS-TI" >TCS-TI</option>
                     <option value="TCS-OC" >TCS-OC</option>
                     <option value="TCS-GC-GC" >TCS-GC-GC</option>
                     <option value="TCS-CO" >TCS-CO</option>
                     <option value="TCS-OCOC" >TCS-OCOC</option>
                     <option value="TCS-GEGE" >TCS-GEGE</option>
                     <option value="TCS-GERHCF" >TCS-GERHCF</option>
                    
                 </select>
                                
                                
                            
                                   
            </div>
                           <font color= #FFFF00>
                                <h2>Clave del trabajador</h2>
                                    </font>
                            <div class="group-material">
                                <input name="claveuser" type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del usuario"  required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del personal administrativo, solamente letras">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                            <font color= #FFFF00>
                                <h2>Nombres</h2>
                                    </font>
                            <div class="group-material">
                                <input name="nombre" type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del usuario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del personal administrativo, solamente letras">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                           <font color= #FFFF00>
                                <h2>Apellidos</h2>
                                    </font>
                            <div class="group-material">
                                <input name="apellido" type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del usuario" pattern="[a-z ]+" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del personal administrativo, solamente letras">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                            <font color= #FFFF00>
                                <h2>Teléfono</h2>
                                     </font>
                            <div class="group-material">
                                <input value="" name="numerotel" type="tel" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del usuario" pattern="[0-9]{10,10}" required="" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solamente 10 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                            <font color= #FFFF00>
                                <h2>Cargo</h2>
                                    </font>
                            <div class="group-material">
                                <input name="cargo" type="text" pattern="[a-z ]+" class="material-control tooltips-general" placeholder="Escribe aquí el cargo del usuario" required="" maxlength="30" data-toggle="tooltip" data-placement="top" title="Cargo del personal administrativo">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                               
                            </div>
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            AV.GREGORIO MENDEZ MAGAÑA No. 1311 TORRE 1 DEPTO 304 C.P. 86070
                        </p>
                        <p>
                            COL.NUEVA VILLAHERMOSA, VILLAHERMOSA CENTRO TABASCO.
                        </p>
                        <p>
                              Tel:993 337 9219 &nbsp; R.F.C TAC071219H21
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; TechCorr <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2017 TechCorr</div>
        </footer>
    </div>
</body>
</html>