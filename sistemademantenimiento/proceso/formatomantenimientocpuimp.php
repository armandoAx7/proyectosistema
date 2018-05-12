<!DOCTYPE html>
 
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>imp</title>

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/jspdf.min.js" type="text/javascript"></script>
    <script src="../js/filesaver.js" type="text/javascript"></script>
    <script src="../js/html2canvas.js" type="text/javascript"></script>    

    <script type="text/javascript">
      $(function() { 
          $("#crearimagen").click(function() { 
              html2canvas($("#contenido"), {
                  onrendered: function(canvas) {
                     var width = canvas.width;
                var height = canvas.height;
                var millimeters = {};
                millimeters.width = Math.floor(width * 0.268);
                millimeters.height = Math.floor(height * 0.266);

                var imgData = canvas.toDataURL(
                    'image/png');
                var doc = new jsPDF("p", "mm", "a4");
                doc.deletePage(1);
                doc.addPage(millimeters.width, millimeters.height);
                doc.addImage(imgData, 'PNG', 1.5, 0);
                doc.save('WebSiteScreen.pdf');
                  },
                 
              });
          });
      });
    </script>


</head>
<body>

	<div class="container">

    <h1></h1>   

	    <div class="row" id="contenido">

	       <div id="logo">
         
             
             <div style="float: left">
                 <img src="../assets/img/logo.jpg" alt="TechCorr" class="img-responsive left-box" style="width:45%;">
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
include ("../conexion.php");

$folio=$_REQUEST['folio'];
$query="SELECT * FROM formatomantenimiento WHERE folio='$folio'";
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
                 

         
      
        
                    include ("../conexion.php");
                    
            $folio=$_REQUEST['folio'];
            $query2="SELECT o.fecharegistro,o.tipodispositivo,o.seriecomp,o.claveuser,o.proyecto,m.claveuser,m.proceso,d.folio,d.fallas,d.complementario FROM equipodecomputo AS o inner JOIN usuario AS m ON o.claveuser=m.claveuser INNER JOIN formatomantenimiento AS d on o.seriecomp=d.seriecomp WHERE d.folio=$folio";
            $resultado2=$conexion->query($query2);   
        $row2=$resultado2->fetch_assoc();


        $complementario= explode(',',$row2['complementario']);
           
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
   include ("../conexion.php");
                    
            $folio=$_REQUEST['folio'];
            $querycpu="SELECT o.proyecto,o.fecharegistro,o.tipodispositivo,o.seriecomp,o.claveuser,m.tipodisp,m.Procesador,m.modelocargador,m.seriecargador,m.marcacargador,m.tamanohdd,m.tamanoram,m.marca,m.modelo,m.serie,d.folio FROM equipodecomputo AS o inner JOIN regcpu AS m ON o.seriecpu=m.serie INNER JOIN formatomantenimiento AS d on o.seriecomp=d.seriecomp  WHERE d.folio=$folio";
            $resultadocpu=$conexion->query($querycpu);   
        $rowcpu=$resultadocpu->fetch_assoc();


       
           
          ?>
         <?php
   include ("../conexion.php");
                    
           $folio=$_REQUEST['folio'];
            $querymonitor="SELECT o.proyecto,o.fecharegistro,o.tipodispositivo,o.seriecomp,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio FROM equipodecomputo AS o inner JOIN regmonitor AS m ON o.seriemonitor=m.serie INNER JOIN formatomantenimiento AS d on o.seriecomp=d.seriecomp WHERE d.folio=$folio";
            $resultadomonitor=$conexion->query($querymonitor);   
        $rowmonitor=$resultadomonitor->fetch_assoc();
?>
            <?php
   include ("../conexion.php");
                    
           $folio=$_REQUEST['folio'];
            $queryteclado="SELECT o.proyecto,o.fecharegistro,o.tipodispositivo,o.seriecomp,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio FROM equipodecomputo AS o inner JOIN regteclado AS m ON o.seriet=m.serie INNER JOIN formatomantenimiento AS d on o.seriecomp=d.seriecomp WHERE d.folio=$folio";
            $resultadoteclado=$conexion->query($queryteclado);   
        $rowteclado=$resultadoteclado->fetch_assoc();
?>
           <?php
   include ("../conexion.php");
                    
           $folio=$_REQUEST['folio'];
            $querymouse="SELECT o.proyecto,o.fecharegistro,o.tipodispositivo,o.seriecomp,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio FROM equipodecomputo AS o inner JOIN regmouse AS m ON o.seriemouse=m.serie INNER JOIN formatomantenimiento AS d on o.seriecomp=d.seriecomp WHERE d.folio=$folio";
            $resultadomouse=$conexion->query($querymouse);   
        $rowmouse=$resultadomouse->fetch_assoc();
?>
 <?php
   include ("../conexion.php");
                    
           $folio=$_REQUEST['folio'];
            $queryreg="SELECT o.proyecto,o.fecharegistro,o.tipodispositivo,o.seriecomp,o.claveuser,m.tipodisp,m.marca,m.modelo,m.serie,d.folio FROM equipodecomputo AS o inner JOIN regnbrk AS m ON o.seriereg=m.serie INNER JOIN formatomantenimiento AS d on o.seriecomp=d.seriecomp WHERE d.folio=$folio";
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
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowcpu['marca'];    ?></div>
                    <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowcpu['modelo'];    ?></div>
                    <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowcpu['serie'];    ?></div>
                         
                    </div>
                    
                    <div class="div-table-row4 div-table-row-list4"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell4" style="width: 20%;background-color: #BFC9CA;">Monitor:</div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowmonitor['marca'];    ?></div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowmonitor['modelo'];    ?></div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowmonitor['serie'];    ?></div>
                        
                       
                        </div>
                    
                    <div class="div-table-row4 div-table-row-list4"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell4" style="width: 20%;background-color: #BFC9CA;">Teclado:</div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowteclado['marca'];    ?></div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowteclado['modelo'];    ?></div>
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowteclado['serie'];    ?></div>
                        
                       
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
                        <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowcpu['marcacargador'];    ?></div>
                         <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowcpu['modelocargador'];    ?></div>
                         <div class="div-table-cell4" style="width: 20%;"><?php  echo $rowcpu['seriecargador'];    ?></div>
                        
                       
                        </div>
                       
                           
          
                    
                    
                    
                    
              </div>   
                    
                    
                    
                    
                    
                    
      
              
              
            <div class="div-table2" style="margin:0 !important; float:left;">
                    <div class="div-table-row div-table-row-list" style="background-color: #96abc9 ; font-weight:bold;">
                        <div class="div-table-cell" style="width: 5%";><center>Procesador</center></div>
                         <div class="div-table-cell" style="width: 15%;"><center>HDD</center></div>
                         <div class="div-table-cell" style="width: 15%;"><center>RAM</center></div>
                        </div>
                          
                 
                    
                 
                        <div class="div-table-row div-table-row-list"style="background-color:  #DCDAD9  ; font-weight:bold;">
                            <div class="div-table-cell" style="width: 20%;"><?php  echo $rowcpu['Procesador'];    ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo $rowcpu['tamanohdd'];    ?></div>
                        <div class="div-table-cell" style="width: 20%;"><?php  echo $rowcpu['tamanoram'];    ?></div>
                       
                        
                    
                            </div>
                
                
                
                       <div style="clear: both; background-color: "></div>
                
                
            
                
                      
                
                    
              </div>
              
               
               <div class=" div-table-head">
               <CENTER> ANOMALÍAS FÍSICAS ENCONTRADAS</CENTER>
              
                    
                </div>
            <div class=" div-table-head4">
               <img src="../assets/img/fotopc.jpg" width="500px" height="205px">
              
                    
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
            
        
        
             
 
            
            
            
            
             
            
            
            
            
            
            
            
            
            
              

          <footer>
            <div class="container text-center">
              <p class="text-muted credit">
                Desarrollado por <a href="" target="blank">TechCorr</a>
              </p>
            </div>        
          </footer>

			</div>

<div>
    <button id="crearimagen" class="form-control"/>imprimir
        
        
        </div>

      <div class="row">
        <div class="col-md-12" id="img-out" align="center">
          <h5 style="font-weight:bold; color:purple;">TechCorr</h5>
          <span style="font-size:11px;"></span>        
        </div>
      </div>     
        

	</div>  

</body>
</html>