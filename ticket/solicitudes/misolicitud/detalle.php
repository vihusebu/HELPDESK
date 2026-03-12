<?php
  $ruta="../../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."class/tipo.php");
  $tipo=new tipo;
  include_once($ruta."class/area.php");
  $area=new area;
   include_once($ruta."class/solucion.php");
  $solucion=new solucion;
  include_once($ruta."class/soluciondetalle.php");
  $soluciondetalle=new soluciondetalle;
  include_once($ruta."class/files.php");
  $files=new files;
  include_once($ruta."funciones/funciones.php");
  session_start(); 
   $fechaHoy=date('Y-m-d');
   extract($_GET);

  $valor=dcUrl($lblcode); //idticket
  $valor2=dcUrl($lblcode2);//idsolucion
  $tic=$ticket->muestra($valor);
  $sol=$solucion->muestra($valor2);
  $tip=$tipo->muestra($tic['idtipo']);
  $are=$area->muestra($tic['idarea']);
  $vadmeje=$vadmejecutivo->muestra($sol['idadmejecutivo']);
  switch ($tic['estado']) 
     {
       case '1':
          $estado='<b style="color:orange;">PENDIENTE</b>';
         break;
       
       case '2':
          $estado='<b style="color:blue;">EN PROCESO</b>';
         break;
       case '3':
        $estado='<b style="color:green;">EJECUTADO</b>';
       break;
       case '4':
          $estado='<b style="color:red;">CANCELADO</b>';
         break;
      }

      $dfoto=$files->mostrarUltimo("id_publicacion=".$valor." and tipo_foto='fotoSolicitudTicket'");
if (count($dfoto)>0) {
    $rutaFoto=$ruta."ticket/editar/server/php/".$valor."/".$dfoto['name'];
}
else{
    $rutaFoto=$ruta."imagenes/imagenvacio.png";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="CONTROL DE AVANCE DE SOLUCION DE PROBLEMA";
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
          $idmenu=1125;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row " >
              <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <div class="col s12 m10 l10"><a href="index.php" class="btn-jh waves-effect waves-light darken-4 blue"><i class="fa fa-reply"></i> </a><?php echo $hd_titulo; ?></div>
                <div class="col s12 m2 l2" >
                
              </div>
              
              </div>
              
              </div>
            </div>
          </div>
           <div class="container">
            <div class="section">
              <div class="row" >
              <div class="col s12 m5 l5" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;  font-size: 15px;">
                <div class="col s12 m6 l6" style="">
                Area:<b><?php echo $are['nombre'] ?></b>
                Tipo:<b><?php echo $tip['nombre'] ?></b><br>
                Problema:<b><?php echo $tic['problema'] ?></b><br>
                Descripción detallado:<b><?php echo $tic['descripcion'] ?></b><br>
                Fecha Solicitado:<b><?php echo $tic['fecha'] ?></b><br>
                Fecha Iniciado:<b><?php echo $sol['fecha'] ?></b><br>
                Asignado(OPERARIO):<b><?php echo $vadmeje['nombre'].' '.$vadmeje['paterno'] ?></b><br>
                ESTADO:<?php echo $estado ?><br>
                </div>
                
                <div class="col s12 m6 l6" style="text-align: center;">
                  <img src="<?php echo $rutaFoto ?>"  width="300" >
                  </div>
                <div class="col s12 m12 l12" style="text-align: right;">
                  
                  <button class="btn waves-effect darken-4 red" onclick="finalizaact();"><i class="fa fa-list"></i> FINALIZAR TICKET</button>
                </div>
              </div>
              <div class="col s12 m7 l7" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;  font-size: 15px; text-align: center;">
                 <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">
                        <input type="hidden" name="idticket" id="idticket" value="<?php echo $valor ?>">
                          <input type="hidden" name="idsolucion" id="idsolucion" value="<?php echo $valor2 ?>">
                <div class="col s12 m12 l12">
                    <div class="formcontent">  
                      <div class="row">
                        <div class="input-field col s12 m6 l6">
                          <input id="idfecha" name="idfecha" readonly type="date" value="<?php echo $fechaHoy ?>" class="validate">
                          <label for="idfecha">Fecha Registro</label>
                        </div>

                        <div class="input-field col s12 m12 l12">
                          <textarea id="idobservacion" name="idobservacion" class="materialize-textarea" length="500"></textarea>
                        <label for="idobservacion">Detalle del Avance de solución de ticket</label>
                        </div>
                        <div class="col s12 m12 l12" style="text-align: right;">
                          <a id="btnSave" class="btn waves-effect waves-light darken-4 cyan"><i class="fa fa-save"></i> REGISTRAR</a>
                          </div>                     
                      </div>
                </div>
              </form>
              </div>
              
              </div>
            </div>     
            </div>
     
          <div class="container">
            <div class="section">
              <div class="row" >
              <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                   LISTADO DE SEGUIMIENTO    
                <table id="example2" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Cod</th>
                      <th>Fecha registro</th>
                      <th>Hora registro</th>
                      <th>Descripción Avance</th>
                      <th>Fotografia</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Cod</th>
                      <th>Fecha registro</th>
                      <th>Hora registro</th>
                      <th>Descripción Avance</th>
                      <th>Fotografia</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $contar=0;
                    foreach($soluciondetalle->mostrarTodo("idsolucion=".$valor2." and estado=1") as $f)//idtipo=142
                    {
                      
                       $lblcode3=ecUrl($f['idsoluciondetalle']);
                     $contar++;
                    ?>
                    <tr style=""><!--<?php //echo $estilo ?>-->
                      <td><?php echo $contar ?></td>
                       <td><?php echo $f['fecha'] ?></td>
                       <td><?php echo $f['horacreacion'] ?></td>
                       <td><?php echo $f['avance'] ?></td> 
                       <td><a  href="fotografia.php?lblcode=<?php echo $lblcode; ?>&lblcode2=<?php echo $lblcode2; ?>&lblcode3=<?php echo $lblcode3; ?>" class="btn waves-effect waves-light darken-4 blue"> <i class="fa fa-file-picture-o (alias)"></i> Foto </a></td>          

                     
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>     
            </div>
         
        </section>
 <div class="container">
            <div class="section">           
                <div id="modal10" class="modal">
                  <div class="modal-content">

                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        
                        <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; border-radius: 5px; border: #CBCBCB 1px solid;">
                FINALIZADO SOLUCIÓN DE TICKET : <b style="font-size: 25px;"><?php echo $tic['problema'] ?></b></div>
                         <form class="col s12" id="idform10" action="return false" onsubmit="return false" method="POST">
                          <input type="hidden" name="idticketFin" id="idticketFin" value="<?php echo $valor ?>">
                          <input type="hidden" name="idsolucionFin" id="idsolucionFin" value="<?php echo $valor2 ?>">
                <div class="col s12 m12 l12">
                    <div class="formcontent">  
                      <div class="row">
                       
                        <div class="input-field col s12 m6 l6">
                          <input id="idfechafin" name="idfechafin" readonly type="date" value="<?php echo $fechaHoy ?>" class="validate">
                          <label for="idfechafin">Fecha finalizado</label>
                        </div>

                        <div class="input-field col s12 m12 l12">
                          <textarea id="iddescripcionfin" name="iddescripcionfin" class="materialize-textarea" length="500"></textarea>
                        <label for="iddescripcionfin">Descripción y la conclusión</label>
                        </div>                    
                      </div>
                </div>
              </form>
               
              </div>
                  </div>
                  <div class="modal-footer"> 
                    <a id="btnSave10" class="btn waves-effect waves-light darken-4 cyan"><i class="fa fa-save"></i> FINALIZAR ACTIVIDAD</a>
                  <a id="atnn" onclick="cerrar10();" class="btn waves-effect waves-light red"><i class="fa fa-clear"></i> CERRAR</a>
                  </div>
                </div>
            </div>
          </div>

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
        "order": [[ 0, "desc" ]],
        buttons: [
            //'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
         
    });
 function iniciarpantalla(idact,nombre)
  {
    $('#idactividadImport').val(idact);
    $('#idnombreImport').val(nombre);
    $('#modal2').openModal();
  }
 
          //0=fecha actual dia
          //1=fecha cambiado

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
   
    $("#btnSave").click(function(){
        $('#btnSave').attr("disabled",true);
        if (validar()) 
        {       
       // alert('sadjaksjd');   
                swal({
                  title: "¿Esta seguro?",
                  text: "Realizar el registro",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "SI",
                  closeOnConfirm: false
                }, function () {
                  var str = $( "#idform" ).serialize();
                  $.ajax({
                    url: "guardardetalle.php",
                    type: "POST",
                    data: str,
                    success: function(resp){
                      //alert(resp);
                      console.log(resp);
                      $("#idresultado").html(resp);
                    }
                  }); 
                });
        }else{
          swal("ERROR","Faltan datos","error");
        }
      });
function validar(){
  retorno=true;
  fec=$('#idfecha').val();
  obs=$('#idobservacion').val();  
  if(fec=="" || obs==""){
    retorno=false;
  }
  return retorno;
}   
  function cancelar(id)
  {
     swal({
                  title: "¿Esta seguro?",
                  text: "CANCELAR",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "Si, estoy seguro",
                   closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                 // var str = $( "#idform" ).serialize();
                  $.ajax({
                    url: "cancelar.php",
                    type: "POST",
                    data: "idticket="+id,
                    success: function(resp){
                      //alert(resp);
                      setTimeout(function(){     
                          console.log(resp);
                          $('#idresultado').html(resp);   
                        }, 1000);
                    }
                  }); 
                });
  }
  function finalizaact()
{
   $('#modal10').openModal();
}
$("#btnSave10").click(function(){
        $('#btnSave10').attr("disabled",true);
        if (validar10()) 
        {       
       // alert('sadjaksjd');   
                swal({
                  title: "¿Esta seguro?",
                  text: "Finalizar ticket",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "SI",
                  closeOnConfirm: false
                }, function () {
                  var str = $( "#idform10" ).serialize();
                  $.ajax({
                    url: "finalizar.php",
                    type: "POST",
                    data: str,
                    success: function(resp){
                      //alert(resp);
                      console.log(resp);
                      $("#idresultado").html(resp);
                    }
                  }); 
                });
        }else{
          swal("ERROR","Faltan datos","error");
        }
      });
function validar10(){
  retorno=true;
  fec=$('#difechafin').val();
  obs=$('#iddescripcionfin').val();  
  if(fec=="" || obs==""){
    retorno=false;
  }
  return retorno;
}
function cerrar10()
{
   $('#modal10').closeModal();
}
    </script>
</body>

</html>