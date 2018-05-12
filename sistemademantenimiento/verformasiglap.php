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
              
              <?php      
include ("conexion.php");

$folio=$_REQUEST['folio'];
$query="SELECT * FROM formatoasiglap WHERE folio='$folio'";
            $resultado=$conexion->query($query);   
        $row=$resultado->fetch_assoc();

              ?>
              
         
              
              
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div  class="div-table-cell" style="width: 20%;">equipo de laptop</div>
                        <div class="div-table-cell" style="width: 20%;"><input type="text" size="15" maxlength="30" value=" <?php echo $row['fecha'];    ?>" name="fecha"></div>
                        <div class="div-table-cell" style="width: 20%;"><input type="text" size="15" maxlength="30" value="<?php echo $row['folio'];    ?>" name="folio"></div>
                       
                        
                       
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
                    
            $folio=$_REQUEST['folio'];
            $query2="SELECT o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio,d.softwares,d.observacionesusuarios,d.motivos,d.fechaentrega FROM entregalaptop AS o inner JOIN reglaptop AS m ON o.serielap=m.serie INNER JOIN formatoasiglap AS d on o.serieentrega=d.serie WHERE d.folio=$folio";
            $resultado2=$conexion->query($query2);   
        $row2=$resultado2->fetch_assoc();


        $softwares= explode(',',$row2['softwares']);
           
          ?>
                </div>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div  class="div-table-cell" style="width: 20%;"><?php echo $row2['tipodispositivo'];    ?></div>
                        <div  class="div-table-cell" style="width: 20%;"><?php echo $row2['marca'];    ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php echo $row2['modelo'];    ?>
                            </div>
                       
                         <div  class="div-table-cell" style="width: 20%;"><input style="border: none;background-color:#DCDAD9;text-align: center; " value="<?php echo $row2['serieentrega'];    ?>" type="" name="seriecomp"></div>
                       
                        </div>
                       
                            </div>
              </div>
              
               <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color: #B3B6B7   ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 9%;"><H4><CENTER>Usuario:</CENTER></H4></div>
                  
                            <div class="div-table-cell" style="width: 20%;"> <input size="189" readonly="readonly" type="text" name="claveuser" style="text-align: center;font-size:16px;font-weight: bold; background-color: #EDF1F1;border: none; " value="<?php echo $row2['claveuser'];    ?>"> </div>
                       
                       
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
                       <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="Sistema" value="1"<?php if (in_array('1',$softwares )== true) { echo'checked="checked"';} ?> >Sistema Op.</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="autocad" value="2" <?php if (in_array('2',$softwares )== true) { echo'checked="checked"';} ?>  >Autocad</div>
                         
                    </div>
                    
                    <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="office" value="3"<?php if (in_array('3',$softwares )== true) { echo'checked="checked"';} ?>>Office</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="ultrapipe" value="4"<?php if (in_array('4',$softwares )== true) { echo'checked="checked"';} ?> >UltraPipe</div>
                        
                       
                        </div>
                    
                    <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="oficepro" value="5"<?php if (in_array('5',$softwares )== true) { echo'checked="checked"';} ?>>Ofice Project</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="neodata" value="6"<?php if (in_array('6',$softwares )== true) { echo'checked="checked"';} ?>>NeoData</div>
                        
                       
                        </div>
                    
                     <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="acrobat" value="7"<?php if (in_array('7',$softwares )== true) { echo'checked="checked"';} ?>>Acrobat Pro</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="deltek" value="8"<?php if (in_array('8',$softwares )== true) { echo'checked="checked"';} ?>>Deltek</div>
                        
                       
                        </div>
                    
                    
                     <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="impresoras" value="9"<?php if (in_array('9',$softwares )== true) { echo'checked="checked"';} ?>>Impresoras</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="contpaq" value="10"<?php if (in_array('10',$softwares )== true) { echo'checked="checked"';} ?>>Contpaq</div>
                        
                       
                        </div>
                         <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="email" value="11"<?php if (in_array('11',$softwares )== true) { echo'checked="checked"';} ?> >E-mail Corp.</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="ctrl" value="12"<?php if (in_array('12',$softwares )== true) { echo'checked="checked"';} ?> >Ctrl Asistencia</div>
                        
                       
                        </div>
                      <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="arch" value="13"<?php if (in_array('13',$softwares )== true) { echo'checked="checked"';} ?>>Compresor Arch</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="olympus" value="14"<?php if (in_array('14',$softwares )== true) { echo'checked="checked"';} ?> >Olympus</div>
                        
                       
                        </div>
                     <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="dvd" value="15"<?php if (in_array('15',$softwares )== true) { echo'checked="checked"';} ?> >Grabador DVD</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="caratula" value="16"<?php if (in_array('16',$softwares )== true) { echo'checked="checked"';} ?> >Caratula CD</div>
                        
                       
                        </div>
                     <div class="div-table-row2 div-table-row-list2"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="cd" value="17"<?php if (in_array('17',$softwares )== true) { echo'checked="checked"';} ?> >Caratula CD</div>
                        <div class="div-table-cell2" style="width: 20%;"><input type="checkbox" name="respaldo" value="18"<?php if (in_array('18',$softwares )== true) { echo'checked="checked"';} ?>>Respaldo Datos</div>
                        
                       
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
                    
                        <div class="div-table-cell" style="width: 30%;"><input type="text" size="120" maxlength="130" value="<?php echo $row2['observacionesusuarios'];    ?>" name="observacionuser"></div>  
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
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row2['fecharegistro'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row2['tipodisp'];         ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo  $row2['marca'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"><?php  echo  $row2['modelo'];         ?></div>
                      <div class="div-table-cell" style="width: 20%;"><?php  echo  $row2['serie'];         ?></div>
                       <div class="div-table-cell" style="width: 20%;"></div>
                        </div>
                       
                            </div>
                    
                
                
                   <?php
            
           $folio=$_REQUEST['folio'];
            $query4="SELECT o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio,d.softwares FROM entregalaptop AS o inner JOIN regdisp AS m ON o.seriedisp=m.serie INNER JOIN formatoasiglap AS d on o.serieentrega=d.serie WHERE d.folio=$folio";
            $resultado4=$conexion->query($query4);   
   while ($row4=$resultado4->fetch_assoc()){


       
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row4['fecharegistro'];         ?></div>
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
           
$folio=$_REQUEST['folio'];
            $query5="SELECT o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio,d.softwares FROM entregalaptop AS o inner JOIN reghdd AS m ON o.seriehdd=m.serie INNER JOIN formatoasiglap AS d on o.serieentrega=d.serie WHERE d.folio=$folio";
            $resultado5=$conexion->query($query5);   
   while ($row5=$resultado5->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row5['fecharegistro'];         ?></div>
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
           
$folio=$_REQUEST['folio'];
            $query6="SELECT o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio,d.softwares FROM entregalaptop AS o inner JOIN regimpresora AS m ON o.serieimpresora=m.serie INNER JOIN formatoasiglap AS d on o.serieentrega=d.serie WHERE d.folio=$folio";
            $resultado6=$conexion->query($query6);   
   while ($row6=$resultado6->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row6['fecharegistro'];         ?></div>
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
            
            $folio=$_REQUEST['folio'];
            $query7="SELECT o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio,d.softwares FROM entregalaptop AS o inner JOIN regmonitor AS m ON o.seriemonitor=m.serie INNER JOIN formatoasiglap AS d on o.serieentrega=d.serie WHERE d.folio=$folio";
            $resultado7=$conexion->query($query7);   
   while ($row7=$resultado7->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row7['fecharegistro'];         ?></div>
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
           

$folio=$_REQUEST['folio'];
            $query8="SELECT o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio,d.softwares FROM entregalaptop AS o inner JOIN regmouse AS m ON o.seriemouse=m.serie INNER JOIN formatoasiglap AS d on o.serieentrega=d.serie WHERE d.folio=$folio";
            $resultado8=$conexion->query($query8);   
   while ($row8=$resultado8->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row8['fecharegistro'];         ?></div>
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
           
$folio=$_REQUEST['folio'];
            $query9="SELECT o.fecharegistro,o.tipodispositivo,o.serieentrega,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio,d.softwares FROM entregalaptop AS o inner JOIN regnbrk AS m ON o.seriereg=m.serie INNER JOIN formatoasiglap AS d on o.serieentrega=d.serie WHERE d.folio=$folio";
            $resultado9=$conexion->query($query9);   
   while ($row9=$resultado9->fetch_assoc()){
                    
                 ?>
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 10%;"><?php  echo  $row9['fecharegistro'];         ?></div>
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


                       




                    

                    

   </div>
              
              
              
              <div class="table-responsive " >
                <div class="div-table" style="margin:0 !important; ">
                    <div class="div-table-row div-table-row-list" style="background-color:  #96abc9  ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 25%;">fecha/devolución:</div>
                        <div class="div-table-cell" style="width: 30%;background-color: #fff; "><input style="border: none;" type="date" height="100px" size="100"  maxlength="80" value="<?php echo $row2['fechaentrega'];    ?>" name="fechaentrega"></div>
                        <div class="div-table-cell" style="width: 25%;">Motivo:</div>
                        <div class="div-table-cell" style="width: 30%;"><input type="text" size="133" maxlength="130" value="<?php echo $row2['motivos'];    ?>   " name="motivo"></div>  
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