<?php
  $ruta="../";
  include_once($ruta."class/almacen.php");
  $almacen=new almacen;
  include_once($ruta."class/cierrecaja.php");
  $cierrecaja=new cierrecaja;
  include_once($ruta."class/invitem.php");
  $invitem=new invitem;
  include_once($ruta."class/estado.php");
  $estado=new estado;
  include_once($ruta."funciones/funciones.php");

  session_start();
  $fechaactual=date('Y-m-d');
  $horaactual=date('H:i:s');
  $fechainicio=date('Y-m-01');
$idus=$_SESSION["codusuario"];
  $lblcode=ecUrl($idus);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    $hd_titulo="REPORTES";
    include_once($ruta."includes/head_basico.php");
    include_once($ruta."includes/head_tabla.php");
    include_once($ruta."includes/head_tablax.php");
  ?>
</head>
<body>
    <?php
      include_once($ruta."head.php");
    ?>
    <div id="main">
      <div class="wrapper">
        <?php
          $idmenu=1095;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12">
                  <h5 class="breadcrumbs-title"><i class="fa fa-tag"></i> <?php echo $hd_titulo; ?></h5>
                </div>
              </div>
            </div>
          </div>
       
          <div class="container">
            <div class="section">
            <div class="row">
            <!--  <a href="nuevo/" class="btn blue"><i class="fa fa-plus"></i> Nuevo Libro</a><br><br> -->
             <div class="col s12 m12 l2">&nbsp;</div>
              <div class="col s12 m12 l8">
                <table id="example" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Nro</th>
                      <th>Reporte</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>                  
                      <tr style="<?php echo $formato ?>">
                        <td>1</td>
                        <td>REPORTE DE VENTAS</td>
                        <td>
                          <a href="#modal1" class='btn green modal-trigger'><i class="mdi-action-exit-to-app"></i> FILTRAR</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>STOCK EN LOS ALMACENES</td>
                        <td>
                        <a class="btn green modal-trigger"  href="#modal2"><i class="mdi-action-exit-to-app"></i> FILTRAR</a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>REPORTE DE INGRESO DE ITEMS</td>
                        <td>
                        <a class="btn green modal-trigger"  href="#modal4"><i class="mdi-action-exit-to-app"></i> Filtrar</a>
                        </td>
                      </tr>
                      <!-- <tr>
                        <td>5</td>
                        <td>REPORTE DE TRASPASO</td>
                        <td>
                        <a class="btn green modal-trigger"  href="#modal5"><i class="mdi-action-exit-to-app"></i> Filtrar</a>
                        </td>
                      </tr>-->
                      <tr>
                        <td>4</td>
                        <td>REPORTE DE EGRESO DE ITEM</td>
                        <td>
                        <a class="btn green modal-trigger"  href="#modal6"><i class="mdi-action-exit-to-app"></i> Filtrar</a>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>REPORTE DE PRODUCTOS MAS VENDIDOS</td>
                        <td>
                        <a class="btn green modal-trigger"  href="#modal7"><i class="mdi-action-exit-to-app"></i> Filtrar</a>
                        </td>
                      </tr>   
                  </tbody>
                </table>
              </div>
              <div class="col s12 m12 l2">&nbsp;</div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="section">
             <div class="row">
                <div id="modal1" class="modal">
                  <div class="modal-content">
                    <div align="right">
                      <button class="btn waves-effect waves-light red darken-4 modal-action modal-close"><i class="fa fa-times"></i></button>
                    </div>
                    <form class="col s12" id="idForm" action="return false" onsubmit="return false" method="POST">
                      <div class="row">
                        <div class="col s12 m12 l12" align="center" ><label style="color:#0069C0; text-decoration:none; font-size:25px;"> Reporte de ventas </label>
                       </div>
                           <div class="input-field col s12 m12 l12" style="font-weight:bold;">
                             <label>ALMACEN</label>
                                  <select id="idalmacen" name="idalmacen">
                               <!--    <option value="0">Seleccionar</option> -->
                                    <?php
                                          foreach($almacen->mostrarTodo("tipo_almacen=2") as $t)
                                          {                                            
                                            ?> 
                                              <option value="<?php echo $t['idalmacen'] ?>"><?php echo $t['nombre']; ?></option>
                                            <?php
                                          }
                                        ?>
                                  </select>
                          </div>
                          

                        <div class="col s12 m12 l12" style="background-color:#ffffff; border: 1px solid #D5D8DC; border-radius:5px; font-weight:bold;">                       
                         
                          <div class="input-field col s12 m12 l3">
                             <label>Tipo recibo</label>
                              <select id="idesfactura2" name="idesfactura2">
                               <option value="10">General</option> 
                                <!-- <option value="1">Factura</option>
                               <option value="0">Sin factura</option> -->
                              </select>
                          </div>
                          <div class="input-field col col s12 m3">
                            <input id="idfechaini2" name="idfechaini2" type="date" class="validate" value="<?php echo $fechainicio ?>">
                            <label for="idfechaini2"><i class="fa fa-user"></i>Fecha inicio</label>
                          </div>
                          <div class="input-field col col s12 m3" style="font-weight:bold;">
                            <input id="idfechafin2" name="idfechafin2" type="date" class="validate" value="<?php echo $fechaactual ?>">
                            <label for="idfechafin2"><i class="fa fa-user"></i>Fecha Fin</label>
                          </div> 
                          <div class="col col s12 m3" style="font-weight:bold;">
                            <button id="btnventas" onclick="ventas('2');" type="button" class="btn blue">GENERAR REPORTE</button> 
                          </div>                          
                        </div>
                        <div class="col col s12 m12">&nbsp;</div>
                          <br><br><br><br><br><br> <br><br><br><br><br><br>
                      

                   
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
             </div>
            </div>  
          </div>
          <div class="container">
            <div class="section">
             <div class="row">
                <div id="modal2" class="modal" style="height: 50%;" >
                  <div class="modal-content">
                    <div align="right">
                      <button class="btn waves-effect waves-light red darken-4 modal-action modal-close"><i class="fa fa-times"></i></button>
                    </div>
                    <form class="col s12" id="idForm2" action="return false" onsubmit="return false" method="POST">
                      <div class="row">
                        <div class="col s12 m12 l12" align="center" ><label style="color:#0069C0; text-decoration:none; font-size:25px;"> Reporte de Stock en los almacenes </label>
                  </div>
                           <div class="input-field col s12 m12 l12" style="font-weight:bold;">
                             <label>ALMACEN</label>
                                  <select id="idalmacen2" name="idalmacen2">
                               <!--    <option value="0">Seleccionar</option> -->
                                    <?php
                                          foreach($almacen->mostrarTodo("tipo_almacen=2") as $t)
                                          {                                            
                                            ?> 
                                              <option value="<?php echo $t['idalmacen'] ?>"><?php echo $t['nombre']; ?></option>
                                            <?php
                                          }
                                        ?>
                                  </select>
                          </div>
                        
                        
                        <div class="col col s12 m12" align="right">
                           <button id="btnstock" onclick="stock();" type="button" class="btn blue">GENERAR REPORTE</button>
                        </div>

                         
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
             </div>
            </div>  
          </div>  
          <div class="container">
            <div class="section">
             <div class="row">
                <div id="modal4" class="modal">
                  <div class="modal-content"> 
                  <form class="col s12" id="idform3" action="return false" onsubmit="return false" method="POST">
                       <div align="right">
                         <button class="btn-jh waves-effect waves-light red darken-4 modal-action modal-close"><i class="fa fa-times"></i></button>                         
                       </div>
                        
                 <div class="row">
                   <div class="col s12 m12 l12" align="center" ><label style="color:#0069C0; text-decoration:none; font-size:25px;"> Reporte de Ingreso de items </label>
                  </div>
                
                  <div id="" class="col s12 m12 l12 " style="border: 1px solid #0069C0; border-radius: 5px; background-color: white"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12">
                        <div class="input-field col s12 m12 l12" style="font-weight:bold;"> 
                         
                        <label>Items</label>
                          <select id="iditem3_4" name="iditem3_4">
                            <option value="0">Todos</option>
                            <?php
                              foreach($invitem->mostrarTodo("estado=0") as $f)
                              {
                                ?>
                                  <option value="<?php echo $f['idinvitem']; ?>"><?php echo $f['nombre']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m4 l4"  style="font-weight:bold;"> 
                        <input id="idfechaini3_4" name="idfechaini3_4" type="date" class="validate" value="<?php echo date('Y-m-01') ?>">
                          <label for="idfechaini3_4" style="text-decoration:none;"> Fecha Inicio</label>
                        </div>                          
                        <div class="input-field col s12 m4 l4"  style="font-weight:bold;"> 
                         <input id="idfechafin3_4" name="idfechafin3_4" type="date" class="validate" value="<?php echo $fechaactual ?>">
                          <label for="idfechafin3_4" style="text-decoration:none; "> Fecha Fin</label>
                        </div>
                        <div class="col s12 m4 l4" > 
                         <button id="btnSave" onclick="generar3('3');" style="font-size: 18px;" class="btn-jh blue"> Generar reporte</button> 
                        </div>
                      </div>
                      </div>
                      </div>
                      <br>&nbsp;
                      <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    
                 </div>

                    </form>
                  </div>
                  <div class="modal-footer">
                  
                  </div>
                </div>
             </div>
            </div>  
          </div>
          <div class="container">
            <div class="section">
             <div class="row">
                <div id="modal5" class="modal">
                  <div class="modal-content"> 
                  <form class="col s12" id="idform4" action="return false" onsubmit="return false" method="POST">
                       <div align="right">
                         <button class="btn-jh waves-effect waves-light red darken-4 modal-action modal-close"><i class="fa fa-times"></i></button>                         
                       </div>
                        
                 <div class="row">
                   <div class="col s12 m12 l12" align="center" ><label style="color:#0069C0; text-decoration:none; font-size:25px;"> Reporte de Traspaso de items </label>
                       </div>
                
                  <div id="" class="col s12 m12 l12 " style="border: 1px solid #0069C0; border-radius: 5px; background-color: white"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12">
                        <div class="input-field col s12 m3 l3" style="font-weight:bold;"> 
                         
                        <label>Items</label>
                          <select id="iditem4_1" name="iditem4_1" >
                            <option value="0">Todos</option>
                            <?php
                              foreach($invitem->mostrarTodo("estado=0") as $f)
                              {
                                ?>
                                  <option value="<?php echo $f['idinvitem']; ?>"><?php echo $f['nombre']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m3 l3"  style="font-weight:bold;"> 
                        <input id="idfechaini4_1" name="idfechaini4_1" type="date" class="validate" value="<?php echo date('Y-m-01') ?>">
                          <label for="idfechaini4_1" style="text-decoration:none;"> Fecha Inicio</label>
                        </div>                          
                        <div class="input-field col s12 m3 l3"  style="font-weight:bold;"> 
                         <input id="idfechafin4_1" name="idfechafin4_1" type="date" class="validate" value="<?php echo $fechaactual ?>">
                          <label for="idfechafin4_1" style="text-decoration:none; "> Fecha Fin</label>
                        </div>
                        <div class="col s12 m3 l3"> 
                         <button id="btnSave" onclick="generar4('3');" style="font-size: 18px;" class="btn-jh blue"> Generar reporte</button> 
                        </div>
                      </div>
                      </div>
                      </div>
                      <br>&nbsp;
                      <br>
                      <div id="" class="col s12 m12 l12 "  style="border: 1px solid #0069C0; border-radius: 5px; background-color: white"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12">
                        <div class="input-field col s12 m3 l3"  style="font-weight:bold;"> 
                         
                        <label>Items</label>
                          <select id="iditem4_2" name="iditem4_2">
                            <option value="0">Todos</option>
                            <?php
                              foreach($invitem->mostrarTodo("estado=0") as $f)
                              {
                                ?>
                                  <option value="<?php echo $f['idinvitem']; ?>"><?php echo $f['nombre']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m3 l3"  style="font-weight:bold;"> 
                        <input id="idfechaini4_2" name="idfechaini4_2" type="date" class="validate" value="<?php echo date('Y-m-01') ?>">
                          <label for="idfechaini4_2" style="text-decoration:none;"> Fecha</label>
                        </div>                          
                        <div class="input-field col s12 m3 l3"> 
                         &nbsp;
                        </div>
                        <div class="col s12 m3 l3"> 
                         <button id="btnSave" onclick="generar4('4');" style="font-size: 18px;" class="btn-jh blue"> Generar reporte</button> 
                        </div>
                      </div>
                      </div>
                      </div>
                 </div>

                    </form>
                  </div>
                  <div class="modal-footer">
                  
                  </div>
                </div>
             </div>
            </div>  
          </div>
           <div class="container">
            <div class="section">
             <div class="row">
                <div id="modal6" class="modal">
                  <div class="modal-content"> 
                  <form class="col s12" id="idform5" action="return false" onsubmit="return false" method="POST">
                       <div align="right">
                         <button class="btn-jh waves-effect waves-light red darken-4 modal-action modal-close"><i class="fa fa-times"></i></button>                         
                       </div>
                        
                 <div class="row">
                   <div class="col s12 m12 l12" align="center" ><label style="color:#0069C0; text-decoration:none; font-size:25px;"> Reporte de egreso de item </label>
                       </div>
                
                  <div id="" class="col s12 m12 l12 " style="border: 1px solid #0069C0; border-radius: 5px; background-color: white"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12">
                        <div class="input-field col s12 m12 l12"  style="font-weight:bold;">                          
                        <label>Items</label>
                          <select id="iditem5_1" name="iditem5_1">
                            <option value="0">Todos</option>
                            <?php
                              foreach($invitem->mostrarTodo("estado=0") as $f)
                              {
                                ?>
                                  <option value="<?php echo $f['idinvitem']; ?>"><?php echo $f['nombre']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m4 l4"  style="font-weight:bold;"> 
                        <input id="idfechaini5_1" name="idfechaini5_1" type="date" class="validate" value="<?php echo date('Y-m-01') ?>">
                          <label for="idfechaini5_1" style="text-decoration:none;"> Fecha Inicio</label>
                        </div>                          
                        <div class="input-field col s12 m4 l4"  style="font-weight:bold;"> 
                         <input id="idfechafin5_1" name="idfechafin5_1" type="date" class="validate" value="<?php echo $fechaactual ?>">
                          <label for="idfechafin5_1" style="text-decoration:none; "> Fecha Fin</label>
                        </div>
                        <div class="col s12 m4 l4"> 
                         <button id="btnSave" onclick="generar5('3');" style="font-size: 18px;" class="btn-jh blue"> Generar reporte</button> 
                        </div>
                      </div>
                      </div>
                      </div>
                        <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br> <br>
                      
                 </div>

                    </form>
                  </div>
                  <div class="modal-footer">
                 
                  </div>
                </div>
             </div>
            </div>  
          </div>

        <div class="container">
            <div class="section">
             <div class="row">
                <div id="modal7" class="modal">
                  <div class="modal-content">
                    <div align="right">
                      <button class="btn waves-effect waves-light red darken-4 modal-action modal-close"><i class="fa fa-times"></i></button>
                    </div>
                    <form class="col s12" id="idForm" action="return false" onsubmit="return false" method="POST">
                      <div class="row">
                        <div class="col s12 m12 l12" align="center" ><label style="color:#0069C0; text-decoration:none; font-size:25px;"> Reporte de ventas por producto </label>
                       </div>
                           <div class="input-field col s12 m12 l12" style="font-weight:bold;">
                             <label>ALMACEN</label>
                                  <select id="idalmacen7" name="idalmacen7">
                               <!--    <option value="0">Seleccionar</option> -->
                                    <?php
                                          foreach($almacen->mostrarTodo("tipo_almacen=2") as $t)
                                          {                                            
                                            ?> 
                                              <option value="<?php echo $t['idalmacen'] ?>"><?php echo $t['nombre']; ?></option>
                                            <?php
                                          }
                                        ?>
                                  </select>
                          </div>
                          

                        <div class="col s12 m12 l12" style="background-color:#ffffff; border: 1px solid #D5D8DC; border-radius:5px; font-weight:bold;">                       
                         
                          <div class="input-field col col s12 m3">
                            <input id="idfechaini7" name="idfechaini7" type="date" class="validate" value="<?php echo $fechainicio ?>">
                            <label for="idfechaini7"><i class="fa fa-user"></i>Fecha inicio</label>
                          </div>
                          <div class="input-field col col s12 m3" style="font-weight:bold;">
                            <input id="idfechafin7" name="idfechafin7" type="date" class="validate" value="<?php echo $fechaactual ?>">
                            <label for="idfechafin7"><i class="fa fa-user"></i>Fecha Fin</label>
                          </div> 
                          <div class="col col s12 m3" style="font-weight:bold;">
                            <button id="btnventass" onclick="generar7('3');" type="button" class="btn blue">GENERAR REPORTE</button> 
                          </div>                          
                        </div>
                        <div class="col col s12 m12">&nbsp;</div>
                          <br><br><br><br><br><br> <br><br><br><br><br><br>
                      

                   
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
             </div>
            </div>  
          </div>

        
  

          <div class="container">
            <div class="section">
             <div class="row">
                <div id="modal91" class="modal" >
                  <div class="modal-content">
                    <div align="right">
                      <button class="btn waves-effect waves-light red darken-4 modal-action modal-close"><i class="fa fa-times"></i></button>
                    </div>
                    <form class="col s12" id="idForm9" action="return false" onsubmit="return false" method="POST">
                      <div class="row">
                        <div class="col s12 m12 l12" align="center" ><label style="color:#0069C0; text-decoration:none; font-size:25px;"> Reporte de stock de insumos </label>
                  </div>
                           <div class="input-field col s12 m12 l12" style="font-weight:bold;">
                             <label>ALMACEN</label>
                                  <select id="idalmacen8_1" name="idalmacen8_1">
                               <!--    <option value="0">Seleccionar</option> -->
                                    <?php
                                          foreach($almacen->mostrarTodo("tipo_almacen=2") as $t)
                                          {                                            
                                            ?> 
                                              <option value="<?php echo $t['idalmacen'] ?>"><?php echo $t['nombre']; ?></option>
                                            <?php
                                          }
                                        ?>
                                  </select>
                          </div>
                        
                        <div class="col col s12 m12" align="right">
                           <button id="btnstock" onclick="stockinsumos();" type="button" class="btn blue">GENERAR REPORTE</button>
                        </div>

                         
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    
                  </div>
                </div>
             </div>
            </div>  
          </div> 
          <?php
//            include_once("../footer.php");
          ?>
        </section>
      </div>
    </div>
    <div class="row">
    </div>
    <div id="idresultado"></div>
    <!-- end -->
    <!-- jQuery Library -->
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php");
      include_once($ruta."includes/script_tablax.php");
    ?>
    <script type="text/javascript">
      
    $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
             'csv', 'excel', 'pdf' 
        ]
      });
    });
    function ventas(opc)
    {
      //var str = $("#idForm").serialize();
      var idalmacen = $("#idalmacen").val();
     activo=0;
       if (opc==2) 
       {
          var esfactura = $("#idesfactura2").val();
          var fechaini = $("#idfechaini2").val();
          var fechafin = $("#idfechafin2").val();
            if (fechaini=="" || fechafin=="") 
            {
              activo=0;
            }else{
              activo=1;
            }      
       }
       if (opc==3) 
       {
           var esfactura = $("#idesfactura3").val();
           var fechaini = $("#idfechaini3").val();
           var fechafin = "";
           if (fechaini=="") 
            {
              activo=0;
            }else{
              activo=1;
            }      
       }
       if (opc==4) 
       {
           var esfactura = $("#idesfactura4").val();
           var fechaini = "";
           var fechafin = "";
           activo=1;
       }

       if (activo==1) 
       {
           popup=window.open("pdf/ventas.php?idalmacen="+idalmacen+"&idesfactura="+esfactura+"&idfechaini="+fechaini+"&idfechafin="+fechafin+"&opcion="+opc);
       }else{
          swal("Error","Verifique las fechas","error");
       }
     
    }

    function stock()
    {
      var idalmacen = $("#idalmacen2").val(); 
      popup=window.open("pdf/stock.php?id="+idalmacen);
    }
function generar3(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
  if (tipo==1) 
  {
      var item="0";
      var fechaini=$("#idfechaini3_1").val();
      var fechafin=$("#idfechafin3_2").val();
  }
  if (tipo==2) 
  {   var item="0";
      var fechaini=$("#idfechaini3_3").val();
      var fechafin="";
  }
  if (tipo==3) 
  {  
      var item=$("#iditem3_4").val();
      var fechaini=$("#idfechaini3_4").val();
      var fechafin=$("#idfechafin3_4").val();
  }
  if (tipo==4) 
  {  
      var item=$("#iditem3_5").val();
      var fechaini=$("#idfechaini3_5").val();
      var fechafin="";
  }
  
  popup=window.open('pdf/ingreso.php?lblcode='+lbl_us+'&fechaini='+fechaini+'&fechafin='+fechafin+'&tipo='+tipo+'&iditem='+item);
}
function generar4(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
 
  if (tipo==3) 
  {  
      var item=$("#iditem4_1").val();
      var fechaini=$("#idfechaini4_1").val();
      var fechafin=$("#idfechafin4_1").val();
  }
  if (tipo==4) 
  {  
      var item=$("#iditem4_2").val();
      var fechaini=$("#idfechaini4_2").val();
      var fechafin="";
  }
  
  popup=window.open('pdf/traspaso.php?lblcode='+lbl_us+'&fechaini='+fechaini+'&fechafin='+fechafin+'&tipo='+tipo+'&iditem='+item);
}
function generar5(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
 
  if (tipo==3) 
  {  
      var item=$("#iditem5_1").val();
      var fechaini=$("#idfechaini5_1").val();
      var fechafin=$("#idfechafin5_1").val();
  }
  if (tipo==4) 
  {  
      var item=$("#iditem5_2").val();
      var fechaini=$("#idfechaini5_2").val();
      var fechafin="";
  }
  
  popup=window.open('pdf/egreso.php?lblcode='+lbl_us+'&fechaini='+fechaini+'&fechafin='+fechafin+'&tipo='+tipo+'&iditem='+item);
}
function generar7(tipo)
{
  //alert(tipo);
  var lbl_us="<?php echo $lblcode ?>";
 
   var idalmacen = $("#idalmacen").val();
     activo=0;
  
          //var esfactura = $("#idesfactura7").val();
          var fechaini = $("#idfechaini7").val();
          var fechafin = $("#idfechafin7").val();
            if (fechaini=="" || fechafin=="") 
            {
              activo=0;
            }else{
              activo=1;
            }      
     

       if (activo==1) 
       {
        //alert('dsdasda');
           popup=window.open("pdf/masvendidoscantidad.php?idalmacen="+idalmacen+"&idfechaini="+fechaini+"&idfechafin="+fechafin+"&opcion="+tipo);
       }else{
          swal("Error","Verifique las fechas","error");
       }
}


    </script>
</body>

</html>