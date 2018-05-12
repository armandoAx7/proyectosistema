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
    <title>form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/img/techcorr-logo.png" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/html2canvas.js" type="text/javascript"></script>
    <script src="js/jspdf.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        
        
        $(document).ready(function(){
 	
	$("#btnExportar").click(function(){
	
        html2canvas(document.getElementById("muestra"), {
            onrendered: function(canvas) {

                var imgData = canvas.toDataURL('image/png');
                    
                console.log('Report Image URL: '+imgData);
                var doc = new jsPDF('p','mm', 'A4'); //210mm wide and 297mm high
               
                doc.addImage(imgData, 'PNG', 10, 10, 190, 190);
                doc.save('sample.pdf');
            },
            
        });

	});
	
	
})

        
        
        
        
</script>


  
     	
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
    <div class="content-page-container full-reset custom-scroll-containers full-cover-background" style="background-image:url();">
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

        <form action="guardarformatomantenimientopc.php" method="post">
        <div id="muestra">
     <div class="container-fluid">
         
         <div id="logo">
         
             
             <div style="float: left">
                 <img src="assets/img/logo.jpg" alt="TechCorr" class="img-responsive left-box" style="width:45%;">
                 <H5><strong>TECHNOLOGY &amp; CORROSION SERVICES S.A. DE C.V.</strong></H5>
             </div>
               <div style="float: right">
                 <h5 style="text-align: right" >
               <strong> 
                   
                   CÓDIGO: TCS-TI-PG-01-FR-03 <br/>
ÚLTIMA REVISIÓN: 09/12/2016<br/>
VERSIÓN: 01

              </strong>     
                   
                   
                   </h5>
             </div>
             
             
             
         <div style="clear: both"></div>
         
         </div>
         
         
         
         
         
         <div id="muestra">
            <font color= #000000>
             
    <h2 class="text-center all-tittles">BITÁCORA DE MANTENIMIENTO Y SOPORTE  </h2>
                </font>
             </div>
          <?php      
include ("conexion.php");

$folio=$_REQUEST['folio'];
$query="SELECT * FROM formatomantenimientolap WHERE folio='$folio'";
            $resultado=$conexion->query($query);   
        $row=$resultado->fetch_assoc();

              ?>
           
          <div class=" div-table-head">
               <CENTER> INFORMACION GENERAL</CENTER>
              
                    
                </div>
          <div  class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 20%;">Tipo de dispositivo</div>
                        <div class="div-table-cell" style="width: 20%;">Fecha</div>
                        <div class="div-table-cell" style="width: 20%;">Ref:</div>
                       
                      
                       
                        
                      
                    </div>
                </div>

                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 20%;">equipo de computo</div>
                        <div class="div-table-cell" style="width: 20%;"><input readonly type="text" style="text-align:center" name="fechamantenimiento"  value="<?php  echo $row['fechamantenimiento']  ?>" ></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo $row['folio']  ?><input type="text" style="display: none;" name="folio" value="<?php  echo $row['folio']  ?>"></div>
                       
                        
                       
                        </div>
                            </div>
                        </div>
                    </div>
         
         <?php
                 

         
      
        
                    include ("conexion.php");
                    
            $folio=$_REQUEST['folio'];
            $query2="SELECT o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,o.proyecto,m.claveuser,m.proceso,d.folio,d.fallas,d.complementos FROM entregalaptop AS o inner JOIN usuario AS m ON o.claveuser=m.claveuser INNER JOIN formatomantenimientolap AS d on o.serieentrega=d.serieentrega WHERE d.folio=$folio";
            $resultado2=$conexion->query($query2);   
        $row2=$resultado2->fetch_assoc();


        $complementario= explode(',',$row2['complementos']);
           
          ?>
         
         
         <div  class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 20%;">¿En uso?</div>
                        <div class="div-table-cell" style="width: 20%;">proceso</div>
                        <div class="div-table-cell" style="width: 20%;">proyecto</div>
                       
                      
                       
                        
                      
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]"<?php if (in_array('1',$complementario )== true) { echo'checked="checked"';} ?> value="1">si</div>
                            <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]"<?php if (in_array('2',$complementario )== true) { echo'checked="checked"';} ?> value="2">no</div>
                        <div class="div-table-cell" style="width: 20%;"> <?php  echo $row2['proceso']  ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo $row2['proyecto']  ?></div>
                       
                        
                       
                        </div>
                            </div>
                        </div>
             
             
             <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 20%;">Modalidad del servicio</div>
                        <div class="div-table-cell" style="width: 20%;">Reporte Falla</div>
                       
                       
                      
                       
                        
                      
                    </div>
                </div>
            
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 20%;"><input type="checkbox" name="Sistema[]" <?php if (in_array('3',$complementario )== true) { echo'checked="checked"';} ?>value="3">Mtto Preventivo</div>
                            <div class="div-table-cell" style="width: 20%;"><input type="checkbox" name="Sistema[]" value="4" <?php if (in_array('4',$complementario )== true) { echo'checked="checked"';} ?>>Mtto Correctivo</div>
                        <div class="div-table-cell" style="width: 50%;text-align:center;"> <input type="text" size="95" maxlength="130" value="<?php  echo $row2['fallas']  ?>" name="fallas"></div>
                        
                       
                        
                       
                        </div>
                            </div>
                        </div>
             
             
             
             
             
                    </div>
         
         
         
         
         
         
         
         
         <br/>
      
        
         

         
         
         
         
         
         
         
         
         
         
   
          
           
               <div class=" div-table-head">
              <CENTER> DATOS TÉCNICOS </CENTER> 
              
                    
                </div>
         
         <?php
   include ("conexion.php");
                    
            $folio=$_REQUEST['folio'];
            $querylap="SELECT o.proyecto,o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.Procesador,m.modelocargador,m.seriecargador,m.marcacargador,m.tamanohdd,m.tamanoram,m.marca,m.modelo,m.serie,d.folio FROM entregalaptop AS o inner JOIN reglaptop AS m ON o.serielap=m.serie INNER JOIN formatomantenimientolap AS d on o.serieentrega=d.serieentrega  WHERE d.folio=$folio";
            $resultadolap=$conexion->query($querylap);   
        $rowlap=$resultadolap->fetch_assoc();


       
           
          ?>
         <?php
   include ("conexion.php");
                    
           $folio=$_REQUEST['folio'];
            $querymonitor="SELECT o.proyecto,o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio FROM entregalaptop AS o inner JOIN regmonitor AS m ON o.seriemonitor=m.serie INNER JOIN formatomantenimientolap AS d on o.serieentrega=d.serieentrega WHERE d.folio=$folio";
            $resultadomonitor=$conexion->query($querymonitor);   
        $rowmonitor=$resultadomonitor->fetch_assoc();
?>
           
           <?php
   include ("conexion.php");
                    
           $folio=$_REQUEST['folio'];
            $querymouse="SELECT o.proyecto,o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio FROM entregalaptop AS o inner JOIN regmouse AS m ON o.seriemouse=m.serie INNER JOIN formatomantenimientolap AS d on o.serieentrega=d.serieentrega WHERE d.folio=$folio";
            $resultadomouse=$conexion->query($querymouse);   
        $rowmouse=$resultadomouse->fetch_assoc();
?>
 <?php
   include ("conexion.php");
                    
           $folio=$_REQUEST['folio'];
            $queryreg="SELECT o.proyecto,o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio FROM entregalaptop AS o inner JOIN regnbrk AS m ON o.seriereg=m.serie INNER JOIN formatomantenimientolap AS d on o.serieentrega=d.serieentrega WHERE d.folio=$folio";
            $resultadoreg=$conexion->query($queryreg);   
        $rowreg=$resultadoreg->fetch_assoc();
?>
         
          <div class="table-responsive"  >
                <div class="div-table2" style="margin:0 !important; float: left;" >
                    <div class="div-table-row2 div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 20%;">Dispositivo</div>
                        <div class="div-table-cell" style="width: 20%;">Marca</div>
                          <div class="div-table-cell" style="width: 20%;">Modelo</div>
                          <div class="div-table-cell" style="width: 20%;">Serie</div>
                         
                    </div>
                    
                    
                <div class="div-table-row4 div-table-row-list4" style="background-color:  #DCDAD9  ; font-weight:bold;">
                       <div class="div-table-cell4" style="width: 20%;background-color:#BFC9CA ;">(E)(P)(S)(O):</div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowlap['marca'];    ?></div>
                    <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowlap['modelo'];    ?></div>
                    <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowlap['serie'];    ?></div>
                         
                    </div>
                    
                    <div class="div-table-row4 div-table-row-list4"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell4" style="width: 20%;background-color: #BFC9CA;">Monitor:</div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowmonitor['marca'];    ?></div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowmonitor['modelo'];    ?></div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowmonitor['serie'];    ?></div>
                        
                       
                        </div>
                    
                    <div class="div-table-row4 div-table-row-list4"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell4" style="width: 20%;background-color: #BFC9CA;">Teclado:</div>
                        <div class="div-table-cell4" style="width: 20%;">-</div>
                        <div class="div-table-cell4" style="width: 20%;">-</div>
                        <div class="div-table-cell4" style="width: 20%;">-</div>
                        
                       
                        </div>
                    
                     <div class="div-table-row4 div-table-row-list4"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell4" style="width: 20%;background-color:#BFC9CA;">Mouse:</div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowmouse['marca'];    ?></div>
                         <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowmouse['modelo'];    ?></div>
                         <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowmouse['serie'];    ?></div>
                        
                       
                        </div>
                    
                    
                    <div class="div-table-row4 div-table-row-list4"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell4" style="width: 20%;background-color: #BFC9CA;">Regulador/NoBreak</div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowreg['marca'];    ?></div>
                         <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowreg['modelo'];    ?></div>
                         <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowreg['serie'];    ?></div>
                        
                       
                        </div>
                    
                        
                       
                       
                         <div class="div-table-row4 div-table-row-list4"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell4" style="width: 20%;background-color: #BFC9CA;">Cargador</div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowlap['marcacargador'];    ?></div>
                         <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowlap['modelocargador'];    ?></div>
                         <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowlap['seriecargador'];    ?></div>
                        
                       
                        </div>
                       
                           
          
                    
                    
                    
                    
              </div>   
                    
                    
                    
                    
                    
                    
      
              
              
            <div class="div-table2" style="margin:0 !important; float:left;">
                    <div class="div-table-row div-table-row-list" style="background-color: #96abc9 ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 5%";><center>Procesador</center></div>
                         <div class="div-table-cell" style="width: 15%;"><center>HDD</center></div>
                         <div class="div-table-cell" style="width: 15%;"><center>RAM</center></div>
                        </div>
                          
                 
                    
                 
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 20%;"><?php  echo $rowlap['Procesador'];    ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo $rowlap['tamanohdd'];    ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo $rowlap['tamanoram'];    ?></div>
                       
                        
                    
                            </div>
                
                
                
                       <div style="clear: both; background-color: "></div>
                
                
            
                
                      
                
                    
              </div>
              
               
               <div class=" div-table-head">
               <CENTER> ANOMALÍAS FÍSICAS ENCONTRADAS</CENTER>
              
                    
                </div>
            <div class=" div-table-head4">
               <img src="assets/img/fotopc.jpg" width="500px" height="205px">
              
                    
                </div>
         
         </div>
          
        
                 
         
         
         
         
         
         
         
         
         
         
         
         
        
         <div style="clear: both"></div>
         
         
          <div style="clear: both"></div>
         
                     
         <br/>
         
         
         
         
          <div class=" div-table-head">
              <CENTER> ACCIONES REALIZADAS DURANTE EL SERVICIO  </CENTER> 
              
                    
                </div>
         <div class=" div-table-head" style="background-color:#96abc9  ">
              <CENTER> Limpieza y Revision fisica  </CENTER> 
              
                    
                </div>
          <div class="table-responsive">
               
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]"<?php if (in_array('5',$complementario )== true) { echo'checked="checked"';} ?> value="5">Gabinete</div>
                        <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="6"<?php if (in_array('6',$complementario )== true) { echo'checked="checked"';} ?>>Fuente de poder</div>
                        <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="7"<?php if (in_array('7',$complementario )== true) { echo'checked="checked"';} ?>>Tarjeta principal</div>
                       <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="8"<?php if (in_array('8',$complementario )== true) { echo'checked="checked"';} ?>>Procesador</div>
                      <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="9"<?php if (in_array('9',$complementario )== true) { echo'checked="checked"';} ?>>Teclado</div>
                       <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="10"<?php if (in_array('10',$complementario )== true) { echo'checked="checked"';} ?>>Monitor</div>
                            <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="11"<?php if (in_array('11',$complementario )== true) { echo'checked="checked"';} ?>>Cables y conexiones</div>
                        </div>
                        
                            </div>
                    <div class=" div-table-head" style="background-color:#96abc9  ">
              <CENTER> Limpieza y Revision fisica  </CENTER> 
              
                    
                </div>
                   
                   <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">Disco Duro:</div>
                        <div class="div-table-cell" style="width: 7%;"><input type="checkbox" name="Sistema[]" value="12"<?php if (in_array('12',$complementario )== true) { echo'checked="checked"';} ?>>CHKDSK</div>
                        <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="13"<?php if (in_array('13',$complementario )== true) { echo'checked="checked"';} ?>>Defragmentación</div>
                       <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="14"<?php if (in_array('14',$complementario )== true) { echo'checked="checked"';} ?>>Diagnostico de memoria RAM</div>
                      <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">Vacunas:</div>
                       <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="15"<?php if (in_array('15',$complementario )== true) { echo'checked="checked"';} ?>>Malware Rootkits Spam</div>
                            
                        </div>
              
                     <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">Disco Duro:</div>
                        <div class="div-table-cell" style="width: 7%;"><input type="checkbox" name="Sistema[]" value="16"<?php if (in_array('16',$complementario )== true) { echo'checked="checked"';} ?>>BIOS</div>
                        <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="17"<?php if (in_array('17',$complementario )== true) { echo'checked="checked"';} ?>>Sistema OP.</div>
                       <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="18"<?php if (in_array('18',$complementario )== true) { echo'checked="checked"';} ?>>Antivirus</div>
                      <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">Diagnóstico:</div>
                       <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="Sistema[]" value="19"<?php if (in_array('19',$complementario )== true) { echo'checked="checked"';} ?>>Nobreak Teclado y Mause</div>
                            
                        </div>
                    
                    
                    <div class=" div-table-head" style="background-color:#96abc9  ">
              <CENTER> El responsable del servicio debe llenar los siguientes datos:  </CENTER> 
              
                    
                </div>
                    
                    <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">Ubicación del respaldo de datos:</div>
                        <div class="div-table-cell" style="width: 0.10%;"> <input type="text" size="73" maxlength="130" value="<?php  echo $row['respaldodatos']  ?>" name="respaldodatos"></div>
                      <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">Se observa actualizado:</div>
                       <div class="div-table-cell" style="width: 6%;"><input type="radio" name="Sistema[]" value="20"<?php if (in_array('20',$complementario )== true) { echo'checked="checked"';} ?>>si</div>
                        <div class="div-table-cell" style="width: 4%;"><input type="radio" name="Sistema[]" value="21"<?php if (in_array('21',$complementario )== true) { echo'checked="checked"';} ?>>No</div>
                            
                        </div>
                    
                    
                    
                    
     
              </div>
              
              
              
              <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 40%;background-color:#BFC9CA ;">Anomalias encontradas:</div>
                        <div class="div-table-cell" style="width:60%;"> <input type="text" size="129" maxlength="130" value="<?php  echo $row['anomalias']  ?>" name="anomalias"></div>
                     
                        </div>
              
              <div style="clear: both"></div>
               <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 14.2%;background-color:#BFC9CA ;"> prox. mantenimiento:</div>
                        <div class="div-table-cell" style="width:1%;"> <input readonly type="text" size="29" maxlength="130" value="<?php  echo $row['proxmantenimiento']  ?>" name="proxmantenimiento"></div>
                     <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">Nombre y firma:</div>
                    <div class="div-table-cell" style="width:1%;"> <input type="text" size="77" maxlength="130" value="" name="nombre y firma"></div>
                        </div>
              
              <div class=" div-table-head" style="background-color:#96abc9  ">
              <CENTER> OBSERVACIONES E INDICACIONES DEL COORDINADOR DE TI  </CENTER> 
              
                    
                </div>
              
             
               <form>
  <textarea name="observaciones" > <?php  echo $row['observaciones']  ?></textarea>
</form>
            
          <div id="firma2">
              
              <div style="float: left;background-color: white;">
                  
              </div>
              <div style="float: right;">
                 <h2>________________</h2> 
                <h4><strong>Nombre y firma del coordinador</strong></h4>
              </div>
              
              <div style="clear: both;"> </div>
              </div>    
             
         </div>
         <div class=" div-table-head" >
              <CENTER> DATOS Y OBSERVACIONES FINALES POR PARTE DEL USUARIO </CENTER> 
              
                    
                </div>
       
           <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">Nombre del usuario:</div>
                        <div class="div-table-cell" style="width: 0.10%;"> <input type="text" size="73" maxlength="130" value="" name="nombreusuario"></div>
                      <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">El equipo queda funcionando:</div>
                       <div class="div-table-cell" style="width: 6%;"><input type="checkbox" name="" value="37">si</div>
                        <div class="div-table-cell" style="width: 4%;"><input type="checkbox" name="" value="38">No</div>
                            
                        </div>
         
         
         
              <div style="clear: both;"></div>
          <div class=" div-table-head" style="background-color:#96abc9 ">
              <CENTER> Observaciones: </CENTER> 
              
                    
                </div>
       
                       
                <form>
  <textarea class="textarea2">escribe tus observaciones ...</textarea>
</form>
          
         
       <div class="div-table-cell" style="width: 10%;background-color:#BFC9CA ;">Firma de conformidad:</div>
                        <div class="div-table-cell" style="width: 0.10%;"> <input type="text" size="73" maxlength="130" value="" name="firma"></div>    
         
         <div class=" div-table-head" style="background-color:#96abc9  ">
              <CENTER> Del 1 al 5,tomando en cuenta la 1 como calificación mas baja y el 5 como la mas alta.¿cómo califica el servicio?  </CENTER> 
              
                    
                </div>
          <div class="table-responsive">
               
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="" value="m">1.Malo</div>
                        <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="" value="r">2.Regular</div>
                        <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="" value="b">3.Bueno</div>
                       <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="" value="mb">4.Muy Bueno</div>
                      <div class="div-table-cell" style="width: 10%;"><input type="checkbox" name="" value="ex">5.Exelente</div>
                      
                        
                            </div>
         
         
        
            </div>
        
        
             
 
            
            
            
            
              </div>
         </div>
            </div>
       
        </div>
<br>
<br>
<div>
                  <p class="text-center">
                               
                            </p> 
</div>
    </form>
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