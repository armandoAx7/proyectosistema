<?php 

session_start();

if(isset($_SESSION['u_id'])){
    
    $_SESSION['privilegio'];
    
    
    
}else{
    
    header("Location:index.php");
}



      
    



?><!-- 
* Copyright 2017 TechCorr
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>verprodu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/img/techcorr-logo.png" />
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
              
           
                </font>
                 <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/EQUIPO.png" alt="pdf" class="img-responsive center-box" style="max-width: 210px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    <font color= #fff> 
                    Bienvenido a la sección para ver los articulos registrados, seleccione la categoria del articulo desea revisar 
                        </font>
                </div>
            </div>
        </div>
            </div>
        </div>
        <?php 
     include("conexion.php");
        $laptop= mysqli_query ($conexion,"SELECT * FROM reglaptop where tipodisp <> '-' ");
        $cpu= mysqli_query ($conexion,"SELECT * FROM regcpu where tipodisp <> '-'");
        $monitor= mysqli_query ($conexion,"SELECT * FROM regmonitor where tipodisp <> '-' ");
         $teclado= mysqli_query ($conexion,"SELECT * FROM regteclado where tipodisp <> '-' ");
         $mouse= mysqli_query ($conexion,"SELECT * FROM regmouse where tipodisp <> '-' ");
         $regnbrk= mysqli_query ($conexion,"SELECT * FROM regnbrk  where tipodisp <> '-'");
         $impresora= mysqli_query ($conexion,"SELECT * FROM regimpresora  where tipodisp <> '-'");
         $hdd= mysqli_query ($conexion,"SELECT * FROM reghdd where tipodisp <> '-' ");
         $dispcom= mysqli_query ($conexion,"SELECT * FROM regdisp  where tipodisp <> '-'");
        
        
        ?>
        <section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile" data-href="verlap.php" data-num="<?php echo mysqli_num_rows($laptop); ?>">
           <a href="verlap.php">  <div class="tile-icon full-reset" ><i class="zmdi zmdi-laptop "  ></i>   </div></a>
                
                <div class="tile-name all-tittles">laptop</div>  
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($laptop); ?></div>
            </article>
            
            <article class="tile"data-href="vercpu.php" data-num="<?php echo mysqli_num_rows($cpu); ?>">
              <a href="vercpu.php">  <div class="tile-icon full-reset"><i class="zmdi zmdi-memory"></i></div></a>
                <div class="tile-name all-tittles">CPU</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($cpu); ?></div>
            </article>
            
             <article class="tile" data-href="vermonitor.php" data-num="<?php echo mysqli_num_rows($monitor); ?>">
             <a href="vermonitor.php"> <div class="tile-icon full-reset"><i class="zmdi zmdi-desktop-windows"></i></div></a> 
                <div class="tile-name all-tittles">monitor</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($monitor); ?></div>
            </article>
             <article class="tile" data-href="verteclado.php" data-num="<?php echo mysqli_num_rows($teclado); ?>">
           <a href="verteclado.php">  <div class="tile-icon full-reset"><i class="zmdi zmdi-keyboard"></i></div></a>
                <div class="tile-name all-tittles">teclado</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($teclado); ?></div>
            </article>
            
             <article class="tile " data-href="vermouse.php" data-num="<?php echo mysqli_num_rows($mouse); ?>">
              <a href="vermouse.php">   <div class="tile-icon full-reset"><i class="zmdi zmdi-mouse"></i></div></a>
                <div class="tile-name all-tittles">mouse</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($mouse); ?></div>
            </article>
            
             <article class="tile"data-href="ver-reg-nbrk.php" data-num="<?php echo mysqli_num_rows($regnbrk); ?>">
             <a href="ver-reg-nbrk.php"><div class="tile-icon full-reset"><i class="zmdi zmdi-developer-board"></i></div></a> 
                <div class="tile-name all-tittles">reg-nbrk</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($regnbrk); ?></div>
            </article>
            
             <article class="tile"data-href="verimp.php" data-num="<?php echo mysqli_num_rows($impresora); ?>">
           <a href="verimp.php"> <div class="tile-icon full-reset"><i class="zmdi zmdi-scanner"></i></div></a>
                <div class="tile-name all-tittles">impresora</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($impresora); ?></div>
            </article>
             <article class="tile" data-href="verhdd.php" data-num="<?php echo mysqli_num_rows($hdd); ?>">
              <a href="verhdd.php">   <div class="tile-icon full-reset"><i class="zmdi zmdi-usb"></i></div></a>
                <div class="tile-name all-tittles">HDD</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($hdd); ?></div>
            </article>
             <article class="tile" data-href="verdisp.php" data-num="<?php echo mysqli_num_rows($dispcom); ?>">
                 <a href="verdisp.php"> <div class="tile-icon full-reset"><i class="zmdi zmdi-router"></i></div></a>
                <div class="tile-name all-tittles">Disp.Com</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($dispcom); ?></div>
            </article>
            
            
        </section>
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