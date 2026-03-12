<?php
  $ruta="../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."funciones/funciones.php");
  session_start();


  $idus=$_SESSION["codusuario"];
  $lblcode=ecUrl($idus);  
  //$mesAnteriorInicio= date("Y-m-01",strtotime($fecha_actual."- 1 month"));
  $mesInicio= date("Y-m-01");
  $mesFin= date("Y-m-d");
              
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    $hd_titulo="INDICADORES ESTADISTICOS";
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
          $idmenu=1124;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                 <div class="col s12 m12 l12" style="background: white; text-align: center; color:#006458; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <?php echo $hd_titulo; ?>
              </div>
              </div>
            </div>
          </div>
     
          <div class="container">
            <div class="section">
              <div class="row">
                     
                    <div class="col s12 m12 l6"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        <div class="col s12 m12 l12">
                         <b>ANUAL DE TICKETS</b> 
                        </div> 
                        <div class="input-field col s12 m12 l12">                                                 
                        <label>Año</label>
                        <select id="idanio" name="idanio">
                            <option value="0" disabled>Seleccionar</option>
                            <?php
                            $consulta="SELECT DISTINCT(YEAR(fecha)) AS anio
                                      FROM ticket
                                      where activo=1";
                              foreach($ticket->sql($consulta) as $f)
                              {
                                $lblcode2=ecUrl($f['anio']);  
                                ?>
                                  <option value="<?php echo $lblcode2; ?>"><?php echo $f['anio'] ?></option>
                                <?php
                              }
                            ?>
                          </select> 
                        </div>
                        &nbsp;
                        <div class="col s12 m12 l12" style="text-align: right;"> 
                         <button id="btnSave" onclick="generar2(1);" style="font-size: 18px; " class="btn blue"> Generar <i class="fa fa-bar-chart-o"></i></button>
                         <button id="btnSave" onclick="generar2(2);" style="font-size: 18px;" class="btn yellow"> Generar <i class="fa fa-area-chart"></i></button> 
                        </div>
                      </div>
                      </div>
                  </div> 
                   <div class="col s12 m12 l6"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        <div class="col s12 m12 l12">
                         <b>SOLICITUDES MENSUALES</b> 
                        </div> 
                        <div class="input-field col s12 m12 l6"> 
                        <input id="idfechainicio" name="idfechainicio" type="date" class="validate" value="<?php echo $mesInicio ?>">
                          <label for="idfechainicio" style="color:#00BBC7; text-decoration:none;"> Fecha Inicio</label>
                        </div>  
                         <div class="input-field col s12 m12 l6"> 
                        <input id="idfechafin" name="idfechafin" type="date" class="validate" value="<?php echo $mesFin ?>">
                          <label for="idfechafin" style="color:#00BBC7; text-decoration:none;"> Fecha Fin</label>
                        </div> 
                        &nbsp;
                        <div class="col s12 m12 l12" style="text-align: right;"> 
                         <button id="btnSave" onclick="generar3(1);" style="font-size: 18px;" class="btn blue"> Generar <i class="fa fa-bar-chart-o"></i></button>  
                         <button id="btnSave" onclick="generar3(2);" style="font-size: 18px;" class="btn  yellow"> Generar <i class="fa fa-area-chart"></i></button> 
                        </div>
                      </div>
                      </div>
                  </div>
                  <div class="col s12 m12 l12"> &nbsp;</div>
                  <div class="col s12 m12 l6"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        <div class="col s12 m12 l12">
                         <b>SOLICITUD DE AREA MAS FRECUENTE</b> 
                        </div> 
                        <div class="input-field col s12 m12 l6"> 
                        <input id="idfechainicio4" name="idfechainicio4" type="date" class="validate" value="<?php echo $mesInicio ?>">
                          <label for="idfechainicio4" style="color:#00BBC7; text-decoration:none;"> Fecha Inicio</label>
                        </div>  
                         <div class="input-field col s12 m12 l6"> 
                        <input id="idfechafin4" name="idfechafin4" type="date" class="validate" value="<?php echo $mesFin ?>">
                          <label for="idfechafin4" style="color:#00BBC7; text-decoration:none;"> Fecha Fin</label>
                        </div> 
                        &nbsp;
                        <div class="col s12 m12 l12" style="text-align: right;"> 
                         <button id="btnSave" onclick="generar4(1);" style="font-size: 18px;" class="btn blue"> Generar <i class="fa fa-pie-chart"></i></button>
                        </div>
                      </div>
                      </div>
                      </div>
                    <div class="col s12 m12 l6"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        <div class="col s12 m12 l12">
                         <b>SOLICITUD DE TIPOS DE PROBLEMAS FRECUENTES</b> 
                        </div> 
                        <div class="input-field col s12 m12 l6"> 
                        <input id="idfechainicio40" name="idfechainicio40" type="date" class="validate" value="<?php echo $mesInicio ?>">
                          <label for="idfechainicio40" style="color:#00BBC7; text-decoration:none;"> Fecha Inicio</label>
                        </div>  
                         <div class="input-field col s12 m12 l6"> 
                        <input id="idfechafin40" name="idfechafin40" type="date" class="validate" value="<?php echo $mesFin ?>">
                          <label for="idfechafin40" style="color:#00BBC7; text-decoration:none;"> Fecha Fin</label>
                        </div> 
                        &nbsp;
                        <div class="col s12 m12 l12" style="text-align: right;"> 
                         <button id="btnSave" onclick="generar40(1);" style="font-size: 18px;" class="btn blue"> Generar <i class="fa fa-pie-chart"></i></button>
                        </div>
                      </div>
                      </div>
                      </div> 
                      <div class="col s12 m12 l12"> &nbsp;</div> 
                    <div class="col s12 m12 l6"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        <div class="col s12 m12 l12">
                         <b>SOLICITUDE DE TICKET DE OPERARIOS MAS FRECUENTES</b> 
                        </div> 
                        <div class="input-field col s12 m12 l6"> 
                           <input id="idfechainicio5" name="idfechainicio5" type="date" class="validate" value="<?php echo $mesInicio ?>">
                          <label for="idfechainicio5" style="color:#00BBC7; text-decoration:none;"> Fecha Inicio</label>
                        </div>  
                         <div class="input-field col s12 m12 l6"> 
                        <input id="idfechafin5" name="idfechafin5" type="date" class="validate" value="<?php echo $mesFin ?>">
                          <label for="idfechafin5" style="color:#00BBC7; text-decoration:none;"> Fecha Fin</label>
                        </div> 
                        &nbsp;
                        <div class="col s12 m12 l12" style="text-align: right;"> 
                         <button id="btnSave" onclick="generar5(1);" style="font-size: 18px;" class="btn blue"> Generar <i class="fa fa-pie-chart"></i></button>  
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="col s12 m12 l6"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        <div class="col s12 m12 l12">
                         <b>TIEMPO DE ESPERA PARA INICIAR LA ATENCIÓN DE OPERADOR DE TICKET</b> 
                        </div> 
                        <div class="input-field col s12 m12 l6"> 
                           <input id="idfechainicio6" name="idfechainicio6" type="date" class="validate" value="<?php echo $mesInicio ?>">
                          <label for="idfechainicio6" style="color:#00BBC7; text-decoration:none;"> Fecha Solicitude de ticket</label>
                        </div>  
                         <div class="input-field col s12 m12 l6"> 
                        <input id="idfechafin6" name="idfechafin6" type="date" class="validate" value="<?php echo $mesFin ?>">
                          <label for="idfechafin6" style="color:#00BBC7; text-decoration:none;"> Fecha de inicio de atención de ticket</label>
                        </div> 
                        &nbsp;
                        <div class="col s12 m12 l12" style="text-align: right;"> 
                         <button id="btnSave6" onclick="generar6(1);" style="font-size: 18px;" class="btn blue"> Generar <i class="fa fa-pie-chart"></i></button>  
                         <button id="btnSave6" onclick="generar6(2);" style="font-size: 18px;" class="btn  yellow"> Generar <i class="fa fa-area-chart"></i></button>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="col s12 m12 l12"> &nbsp;</div> 
                    <div class="col s12 m12 l6"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        <div class="col s12 m12 l12">
                         <b>TIEMPO DE SOLUCIÓN DE PROBLEMAS DE SOLICITUD DE TICKET</b> 
                        </div> 
                        <div class="input-field col s12 m12 l6"> 
                           <input id="idfechainicio7" name="idfechainicio7" type="date" class="validate" value="<?php echo $mesInicio ?>">
                          <label for="idfechainicio7" style="color:#00BBC7; text-decoration:none;"> Fecha de inicio de atención de ticket</label>
                        </div>  
                         <div class="input-field col s12 m12 l6"> 
                        <input id="idfechafin7" name="idfechafin7" type="date" class="validate" value="<?php echo $mesFin ?>">
                          <label for="idfechafin7" style="color:#00BBC7; text-decoration:none;"> Fecha de solución de ticket</label>
                        </div> 
                        &nbsp;
                        <div class="col s12 m12 l12" style="text-align: right;"> 
                         <button id="btnSave7" onclick="generar7(1);" style="font-size: 18px;" class="btn blue"> Generar <i class="fa fa-pie-chart"></i></button>  
                         <button id="btnSave6" onclick="generar7(2);" style="font-size: 18px;" class="btn  yellow"> Generar <i class="fa fa-area-chart"></i></button>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="col s12 m12 l12"><!--green lighten-5-->
                      <div class="card-content">
                        <br> <br>
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white; text-align: center;">
                        <div class="col s12 m12 l12">
                         <b>INDICADORES DE SOLICITUD DE TICKETS ANUAL</b> 
                        </div> 
                        <div class="col s12 m12 l12" style="text-align: center;"> 
                          <a href="indicadores.php" style="font-size: 18px; " class="btn purple" target="_blank">
                            Generar <i class="fa fa-bar-chart-o"></i><i class="fa fa-area-chart"></i>
                         </a>  <br> <br><br>
                        </div>
                      </div>
                      </div> 
                      </div>  
             
                     
                     
              </div>
            </div>     
            </div>

          </div>
        </section>
      </div>
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
      $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
        $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
          $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });



    function cambiaestado(id,estado){
      swal({
        title: "Estas Seguro?",
        text: "Cambiaras el estado al ejecutivo",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#28e29e",
        confirmButtonText: "Estoy Seguro",
        closeOnConfirm: false
      }, function () {      
        $.ajax({
          url: "cambiaestado.php",
          type: "POST",
          data: "id="+id+"&estado="+estado,
          success: function(resp){
            console.log(resp);
            $("#idresultado").html(resp);
          }   
        });
      }); 
    }

function generar2(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
  var idanio=$("#idanio").val();
    popup=window.open('anual.php?lblcode='+lbl_us+'&lblcode2='+idanio+'&tipo='+tipo);
}
function generar3(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
  var fechaini=$("#idfechainicio").val();
  var fechafin=$("#idfechafin").val();
    popup=window.open('meses.php?lblcode='+lbl_us+'&fechaini='+fechaini+'&fechafin='+fechafin+'&tipo='+tipo);
}
function generar4(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
  var fechaini=$("#idfechainicio4").val();
  var fechafin=$("#idfechafin4").val();
    popup=window.open('areafrecuente.php?lblcode='+lbl_us+'&fechaini='+fechaini+'&fechafin='+fechafin+'&tipo='+tipo);
}
function generar40(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
  var fechaini=$("#idfechainicio40").val();
  var fechafin=$("#idfechafin40").val();
    popup=window.open('tipofrecuente.php?lblcode='+lbl_us+'&fechaini='+fechaini+'&fechafin='+fechafin+'&tipo='+tipo);
}
function generar5(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
  var fechaini=$("#idfechainicio5").val();
  var fechafin=$("#idfechafin5").val();
    popup=window.open('usuariofrecuente.php?lblcode='+lbl_us+'&fechaini='+fechaini+'&fechafin='+fechafin+'&tipo='+tipo);
}
function generar6(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
  var fechaini=$("#idfechainicio6").val();
  var fechafin=$("#idfechafin6").val();
    popup=window.open('iniciaratencion.php?lblcode='+lbl_us+'&fechaini='+fechaini+'&fechafin='+fechafin+'&tipo='+tipo);
}
function generar7(tipo)
{
  var lbl_us="<?php echo $lblcode ?>";
  var fechaini=$("#idfechainicio7").val();
  var fechafin=$("#idfechafin7").val();
    popup=window.open('tiemposolucionado.php?lblcode='+lbl_us+'&fechaini='+fechaini+'&fechafin='+fechafin+'&tipo='+tipo);
}
    </script>
</body>

</html>