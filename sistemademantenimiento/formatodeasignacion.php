<?php 

session_start();



      
    



?>



<!-- 
* Copyright 2017 TechCorr
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
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
        <form autocomplete="off" action="guardarformatoasigcpu.php" method="post">
        <div class="container">
          
            <div class="page-header">
                <font color= #000000> 
                <h1 class="all-tittles" >Tecnologias De TI <small>Inicio</small></h1>
                </font>
              
            </div>
        </div>
        <div id="muestra">
     <div class="container-fluid">
         
         <div id="logo">
         
<?php

include("conexion.php");












 ?>
           <?php
                 

                  $seriecomp=$_REQUEST['seriecomp'];
            
        
                    include ("conexion.php");
                    
            
            $query3="SELECT * FROM equipodecomputo WHERE seriecomp='$seriecomp'";
            $resultado3=$conexion->query($query3);   
        $row3=$resultado3->fetch_assoc();
           
          ?>
           
             
             <div style="float: left">
                 <img src="assets/img/logo.jpg" alt="TechCorr" class="img-responsive left-box" style="width:45%;">
                 <H5><strong>TECHNOLOGY &amp; CORROSION SERVICES S.A. DE C.V.</strong></H5>
             </div>
               <div style="float: right">
                 <h5 style="text-align: right" >
               <strong> 
                   
                   CÓDIGO: TCS-TI-PG-01-FR-02 <br/>
ÚLTIMA REVISIÓN: 09/12/2016<br/>
VERSIÓN: 01

              </strong>     
                   
                   
                   </h5>
             </div>
             
             
             
         <div style="clear: both"></div>
         
         </div>
         
         
         
         <div id="muestra">
            <font color= #000000>
             
    <h2 class="text-center all-tittles">RESPONSIVA DE BIENES DE TI  </h2>
                </font>
             </div>
         
         
          <div class=" div-table-head">
               <CENTER> RESPONSIVA DE BIENES INFORMÁTICOS Y/O DE COMUNICACIÓN </CENTER>
              
                    
                </div>
          <div  class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 20%;">Tipo de dispositivo</div>
                        <div class="div-table-cell" style="width: 20%;">fecha</div>
                        <div class="div-table-cell" style="width: 20%;">folio</div>
        
                        
                      
                    </div>
                </div>
              
              
              
         
              
              
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div  class="div-table-cell" style="width: 20%;"><?php echo $row3['tipodispositivo'];    ?></div>
                        <div class="div-table-cell" style="width: 20%;"><input type="date" size="15" maxlength="30" value=" <?php echo date("d/m/Y")  ?>" name="fecha"></div>
                        <div class="div-table-cell" style="width: 20%;"><input type="text" size="15" maxlength="30" value="" name="folio"></div>
                       
                        
                       
                        </div>
                            </div>
                        </div>
                    </div>
          <div >
                    <font color= #000000> 
              <h3><justify> Acepto de conformidad el equipo que se describe a continuación y que me es proporcionado para usarlo como herramienta de trabajo para mis actividades con la empresa, si son extraviados o dañados por uso no adecuado me comprometo a reponerlo de acuerdo a sus característica técnicas o reparar el daño según sea el caso, al ser solicitados por la empresa por cualquier motivo debo entregarlos a la brevedad posible.</justify></h3>
                        </font>
                </div>
         
         
         
                      <div class=" div-table-head">
              <CENTER> DATOS DE HARDWARE</CENTER> 
              
                    
                </div>
          <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 20%;">Hadware</div>
                        <div class="div-table-cell" style="width: 20%;">Marca</div>
                        <div class="div-table-cell" style="width: 20%;">Modelo</div>
                       <div class="div-table-cell" style="width: 20%;">Serie</div>
                      
                       
                        
                      
                    </div>


                    <?php
                 

         
      
        
                    include ("conexion.php");
                    
            $seriecpu=$_REQUEST['seriecpu'];
            $query2="SELECT * FROM regcpu WHERE serie= '$seriecpu' ";
            $resultado2=$conexion->query($query2);   
        $row2=$resultado2->fetch_assoc();
           
          ?>
                </div>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div  class="div-table-cell" style="width: 20%;"><?php echo $row3['tipodispositivo'];    ?></div>
                        <div  class="div-table-cell" style="width: 20%;"><?php echo $row2['marca'];    ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php echo $row2['modelo'];    ?>
                            </div>
                       
                         <div  class="div-table-cell" style="width: 20%;"><input style="border: none;background-color:#DCDAD9;text-align: center; " value="<?php echo $row3['seriecomp'];    ?>" type="" name="seriecomp"></div>
                       
                        </div>
                       
                            </div>
              </div>
              
               <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color: #B3B6B7   ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 9%;"><H4><CENTER>Usuario:</CENTER></H4></div>
                  
                            <div class="div-table-cell" style="width: 20%;"> <input size="189" readonly="readonly" type="text" name="claveuser" style="text-align: center;font-size:16px;font-weight: bold; background-color: #EDF1F1;border: none; " value="<?php echo $row3['claveuser'];    ?>"> </div>
                       
                       
                        </div>
                   </div>
              </div>
              
                    </div>
          
             <div >
                    <font color= #000000> 
              <h3><justify>  Nota: para el caso de los equipos de computo palomee junto al nombre para confirmar software instalado o na si no aplica y señale detalles físicos del equipo. </justify></h3>
                        </font>
                </div>
               <div class=" div-table-head">
              <CENTER> SOFTWARE REQUISITADO Y CONDICIONES DEL EQUIPO </CENTER> 
              
                    
                </div>
         
         
         
          <div class="table-responsive"  >
                <div class="div-table2" style="margin:0 !important; float: left;" >
                    <div class="div-table-row2 div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 50%;">Software Básico</div>
                        <div class="div-table-cell" style="width: 50%;">Software Específico</div>
                         
                    </div>
                    
                    
                <div class="div-table-row2 div-table-row-list2" style="background-color:  #DCDAD9  ; font-weight:bold;">
                       <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="1">Sistema Op.</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="2">Autocad</div>
                         
                    </div>
                    
                    <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="3">Office</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="4">UltraPipe</div>
                        
                       
                        </div>
                    
                    <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="5">Ofice Project</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="6">NeoData</div>
                        
                       
                        </div>
                    
                     <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="7">Acrobat Pro</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="8">Deltek</div>
                        
                       
                        </div>
                    
                    
                     <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="9">Impresoras</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="10">Contpaq</div>
                        
                       
                        </div>
                         <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="11">E-mail Corp.</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="12">Ctrl Asistencia</div>
                        
                       
                        </div>
                      <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="13">Compresor Arch</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="14">Olympus</div>
                        
                       
                        </div>
                     <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="15">Grabador DVD</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="16">Caratula CD</div>
                        
                       
                        </div>
                     <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="17">Caratula CD</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="opcion[]" value="18">Respaldo Datos</div>
                        
                       
                        </div>
                        
                        
                       
                           
          
                    
                    
                    
                    
              </div>   
                    
                    
                    
                    
                    
                    
      
              
              
            <div class="div-table3" style="margin:0 !important; float:left;">
                    <div class="div-table-row div-table-row-list" style="background-color: #96abc9 ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 100%;"><center>Señale observaciones sobre detalles fisicos al recibir el equipo</center></div>
                        </div>
                
                 
                        <div class="div-table-cell3" style="width: 100%;"><img src="assets/img/fotopc.jpg" width="360px" height="250px"></div>
                      
                
                
                 
                    
                    
              </div>
              
               
            
              
         
         </div>
          
        
                 
         
         
         
         
         
         
         
         
         
         
         
         
        
         <div style="clear: both"></div>
         
          <div class="table-responsive " >
                <div class="div-table" style="margin:0 !important; ">
                    <div class="div-table-row div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 25%;">Observación por parte del usuario:</div>
                    
                        <div class="div-table-cell" style="width: 30%;"><input type="text" size="120" maxlength="130" value="" name="observacionuser"></div>  
                    </div>
              </div>
         </div>
          <div style="clear: both"></div>
         
                        <div >
                    <font color= #000000> 
              <h3><justify>  Nota: En el siguiente apartado por cada producto o equipo entregado, quien recibe deberá colocar su firma. </justify></h3>
                        </font>
                </div>
         
         
          <div class=" div-table-head">
              <CENTER> BIENES COMPLEMENTARIOS ADICIONALMENTE O EN FECHAS POSTERIORES  </CENTER> 
              
                    
                </div>
          <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 10%;">Fecha</div>
                        <div class="div-table-cell" style="width: 20%;">Descripción</div>
                        <div class="div-table-cell" style="width: 20%;">Marca</div>
                       <div class="div-table-cell" style="width: 20%;">Modelo</div>
                      <div class="div-table-cell" style="width: 20%;">Serie</div>
                       <div class="div-table-cell" style="width: 20%;">Firma</div>
                        
                      
                    </div>
                </div>
              
              
              
              
        
              
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row3['fecharegistro'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row2['tipodisp'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row2['marca'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"><?php  echo  $row2['modelo'];         ?></div>
                      <div class="div-table-cell" style="width: 20%;"><?php  echo  $row2['serie'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"></div>
                        </div>
                       
                            </div>
                    
                
                
                   <?php
            
            include("conexion.php");
           
$seriemonitor=$_REQUEST['seriemonitor'];
            
            $query4="SELECT * FROM regmonitor WHERE serie='$seriemonitor' ";
            $resultado4=$conexion->query($query4);   
                while ($row4=$resultado4->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row3['fecharegistro'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row4['tipodisp'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row4['marca'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"><?php  echo  $row4['modelo'];         ?></div>
                      <div class="div-table-cell" style="width: 20%;"><?php  echo  $row4['serie'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"></div>
                        </div>
                       
                            </div>
                    

                     <?php 
                       
             }
                       
                      
                       
                       ?>




                       <?php
            
            include("conexion.php");
           
$seriet=$_REQUEST['seriet'];
            
            $query5="SELECT * FROM regteclado WHERE serie='$seriet' ";
            $resultado5=$conexion->query($query5);   
                while ($row5=$resultado5->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row3['fecharegistro'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row5['tipodisp'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row5['marca'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"><?php  echo  $row5['modelo'];         ?></div>
                      <div class="div-table-cell" style="width: 20%;"><?php  echo  $row5['serie'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"></div>
                        </div>
                       
                            </div>
                    

                     <?php 
                       
             }
                       
                      
                       
                       ?>
                    
                      <?php
            
            include("conexion.php");
           
$seriemouse=$_REQUEST['seriemouse'];
            
            $query6="SELECT * FROM regmouse WHERE serie='$seriemouse' ";
            $resultado6=$conexion->query($query6);   
                while ($row6=$resultado6->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row3['fecharegistro'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row6['tipodisp'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row6['marca'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"><?php  echo  $row6['modelo'];         ?></div>
                      <div class="div-table-cell" style="width: 20%;"><?php  echo  $row6['serie'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"></div>
                        </div>
                       
                            </div>
                    

                     <?php 
                       
             }
                       
                      
                       
                       ?>


   <?php
            
            include("conexion.php");
           
$serieimpresora=$_REQUEST['serieimpresora'];
            
            $query7="SELECT * FROM regimpresora WHERE serie='$serieimpresora' ";
            $resultado7=$conexion->query($query7);   
                while ($row7=$resultado7->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row3['fecharegistro'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row7['tipodisp'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row7['marca'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"><?php  echo  $row7['modelo'];         ?></div>
                      <div class="div-table-cell" style="width: 20%;"><?php  echo  $row7['serie'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"></div>
                        </div>
                       
                            </div>
                    

                     <?php 
                       
             }
                       
                      
                       
                       ?>



                       <?php
            
            include("conexion.php");
           

$seriehdd=$_REQUEST['seriehdd'];
            
            $query8="SELECT * FROM reghdd WHERE serie='$seriehdd' ";
            $resultado8=$conexion->query($query8);   
                while ($row8=$resultado8->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row3['fecharegistro'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row8['tipodisp'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row8['marca'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"><?php  echo  $row8['modelo'];         ?></div>
                      <div class="div-table-cell" style="width: 20%;"><?php  echo  $row8['serie'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"></div>
                        </div>
                       
                            </div>
                    

                     <?php 
                       
             }
                       
                      
                       
                       ?>



  <?php
            
            include("conexion.php");
           
$seriereg=$_REQUEST['seriereg'];
            
            $query9="SELECT * FROM regnbrk WHERE serie='$seriereg' ";
            $resultado9=$conexion->query($query9);   
                while ($row9=$resultado9->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row3['fecharegistro'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row9['tipodisp'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row9['marca'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"><?php  echo  $row9['modelo'];         ?></div>
                      <div class="div-table-cell" style="width: 20%;"><?php  echo  $row9['serie'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"></div>
                        </div>
                       
                            </div>
                    

                     <?php 
                       
             }
                       
                      
                       
                       ?>



<?php
            
            include("conexion.php");
           
$seriedisp=$_REQUEST['seriedisp'];
            
            $query10="SELECT * FROM regdisp WHERE serie='$seriedisp' ";
            $resultado10=$conexion->query($query10);   
                while ($row10=$resultado10->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row3['fecharegistro'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row10['tipodisp'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row10['marca'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"><?php  echo  $row10['modelo'];         ?></div>
                      <div class="div-table-cell" style="width: 20%;"><?php  echo  $row10['serie'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"></div>
                        </div>
                       
                            </div>
                    

                     <?php 
                       
             }
                       
                      
                       
                       ?>






















                    
                    
              </div>
              <div class="table-responsive " >
                <div class="div-table" style="margin:0 !important; ">
                    <div class="div-table-row div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 25%;">fecha/devolución:</div>
                        <div class="div-table-cell" style="width: 30%;background-color: #fff; "><input style="border: none;" type="date" height="100px" size="100"  maxlength="80" value="" name="fechaentrega"></div>
                        <div class="div-table-cell" style="width: 25%;">Motivo:</div>
                        <div class="div-table-cell" style="width: 30%;"><input type="text" size="132" maxlength="130" value="" name="motivo"></div>  
                    </div>
              </div>
         </div>
              
              
              <div id="firma">
        <div style="float: left"><font color= #000000> 
              <h4 > ELABORÓ</h4>
                        </font></div>
         
         
             <div style="float:right"><font color= #000000> 
              <h4 > RECIBIÓ</h4>
                        </font></div>
               </div>
              
              
             <br/>
              <br/>
              <br/>
              <br/>
              <div id="firma">
        <div style="float: left"><font color= #000000> 
              <h4 > NOMBRE Y FIRMA</h4>
                        </font></div>
         
         
             <div style="float:right"><font color= #000000> 
              <h4 > NOMBRE Y FIRMA</h4>
                        </font></div>
               </div>
         </div>
         
              
              
        
         </div>
         
         
        
             <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
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