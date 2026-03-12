<?php
  $ruta="../../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."class/admejecutivo.php");
  $admejecutivo=new admejecutivo;
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."class/tipo.php");
  $tipo=new tipo;
  include_once($ruta."class/area.php");
  $area=new area;
  include_once($ruta."class/usuario.php");
  $usuario=new usuario;
   include_once($ruta."class/solucion.php");
  $solucion=new solucion;
  include_once($ruta."class/prioridad.php");
  $prioridad=new prioridad;
  include_once($ruta."class/movimiento.php");
  $movimiento=new movimiento;
  include_once($ruta."class/inventario.php");
  $inventario=new inventario;
  include_once($ruta."funciones/funciones.php");
  session_start(); 
     extract($_GET);
   $fechaHoy=date('Y-m-d');

   $idus=$_SESSION["codusuario"];
   $lblcodeUs=ecUrl($idus);
   $usua=$usuario->muestra($idus);
  //$perUs=$persona->muestra($usua['idpersona']);
  $vadmeje=$vadmejecutivo->mostrarUltimo("idpersona=".$usua['idpersona']);
  $idadmejecutivo=$vadmeje['idvadmejecutivo'];

  //$sol=$solucion->mostrarUltimo("idadmejecutivo=".$idadmejecutivo);
 $idticket=dcUrl($lblcode);
  //$ticExiste=$ticket->muestra($idticket);


   //$ticSelec=$ticket->mostrarPrimero("estado=1");

  // $ticSelec=$ticket->mostrarPrimero("estado=1");
      $ticSelec=$ticket->muestra($idticket);
      $ti2=$tipo->muestra($ticSelec['idtipo']);
       $are2=$area->muestra($ticSelec['idarea']);

       //obtener datos usuario de ticket solicitado
       $usSolicita=$usuario->muestra($ticSelec['usuariocreacion']);
       $vadmejeSOLICITA=$vadmejecutivo->mostrarUltimo("idpersona=".$usSolicita['idpersona']);
       $idadmejecutivoSOLICITA=$vadmejeSOLICITA['idvadmejecutivo'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="LISTA DE ATENCIÓN DE SOLICITUDES DE TICKETS";
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
          $idmenu=1117;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row " >
              <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <div class="col s12 m12 l12"><?php echo $hd_titulo.$idticket; ?></div>
              
              </div>
                    <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                              <div class="card">
                                <div class="card-content cyan" style="color:white; text-align: center; font-size: 20px;">
                                    <b class="card-stats-title" style="font-weight: bold;">CODIGO: <?php echo $ticSelec['idticket'] ?> <i class="mdi-editor-insert-invitation"></i>Solicitud:  <?php echo $ticSelec['fecha'] ?> </b><br>
                                    Solicitante de ticket:<b><?php echo $vadmejeSOLICITA['nombre'].' '.$vadmejeSOLICITA['paterno'].' '.$vadmejeSOLICITA['paterno'] ?></b>
                                </div>
                                <div class="card-action cyan darken-2" style="color:white; <?php echo $colornuevo2 ?>">
                                  <!--DESEMBOLSOSO GENERAL-->
                                   <div class="row" style="background:orange;">
                                      <div class="col s3 m3 l3"> PROBLEMA</div>
                                      <div class="col s5 m5 l5" style="text-align: left;"> DESCRIPCIÓN</div>
                                      <div class="col s2 m2 l2" style="text-align: center;">  ÁREA</div>
                                      <div class="col s2 m2 l2" style="text-align: center;"> TIPO</div>
                                    </div>
                                    <div class="row">
                                      <div class="col s3 m3 l3"><i class="fa fa-users" style="color: white;"></i> <?php echo $ticSelec['problema'] ?></div>
                                      <div class="col s5 m5 l5" style="text-align: left;"><i class="mdi-action-alarm"></i> <?php echo $ticSelec['descripcion'] ?></div>
                                      <div class="col s2 m2 l2" style="text-align: center;"><i class="fa fa-money"></i>  <?php echo $are2['nombre'] ?></div>
                                      <div class="col s2 m2 l2" style="text-align: center;"><i class="fa fa-user"></i> <?php echo $ti2['nombre'] ?></div>
                                    </div>

                                   

                                 <!--FIN DESEMBOLSOSO GENERAL-->
                                
                                </div>
                            </div>
                             <div class="row">
                                      <div class="col s12 m12 l12">
                                        <div class="col s12 m8 l8" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        
                                          <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                                        DESIGNAR LA SOLICITUD DE TICKET...</div>
                                                 <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">
                                                  <input type="hidden" name="idticketImport" id="idticketImport" value="<?php echo $idticket ?>">
                                                  <input type="hidden" name="idadmejecutivoSIS" id="idadmejecutivoSIS" value="<?php echo $idadmejecutivo ?>">
                                                  <input type="hidden" name="idadmejecutivoOPER" id="idadmejecutivoOPER" value="">
                                            <div class="formcontent">  
                                              <div class="row">
                                               
                                                <div class="input-field col s12 m6 l6">
                                                  <input id="idoperadornombre" name="idoperadornombre" onclick="cargaroperarios();" type="text" class="validate">
                                                  <label for="idoperadornombre">Operardor seleccionado (click aqui)</label>
                                                </div>
                                                <div class="input-field col s12 m6 l6">
                                                  <input id="idfechadesignacion" name="idfechadesignacion" readonly type="date" value="<?php echo $fechaHoy ?>" class="validate">
                                                  <label for="idfecha">Fecha designación</label>
                                                </div>
                                                <div class="input-field col s12 m6 l6">
                                                  <label>Prioridad de Atención</label>
                                                  <select id="idprioridad" name="idprioridad">
                                                    <option value="0">Seleccionar</option>
                                                    <?php
                                                      foreach($prioridad->mostrarTodo("estado=1") as $pri)
                                                      {
                                                        ?>
                                                          <option value="<?php echo $pri['idprioridad']; ?>"><?php echo $pri['nombre']; ?></option>
                                                        <?php
                                                      }
                                                    ?>
                                                  </select>
                                                </div>
                                                <input type="hidden" name="idmovimiento" id="idmovimiento">
                                                <input type="hidden" name="idinventario" id="idinventario">
                                                <div class="input-field col s12 m6 l6">
                                                  <input id="idmaterial" name="idmaterial" type="text" readonly class="validate">
                                                  <label for="idmaterial">Material seleccionado</label>
                                                </div>
                                                <div class="input-field col s12 m12 l12">
                                                  <textarea id="idobservacion" name="idobservacion" class="materialize-textarea" length="500"></textarea>
                                                <label for="idobservacion">Observación</label>
                                                </div>
                                                <div class="col s12 m12 l12" style="text-align: right;">
                                                  <a id="btnSave" class="btn waves-effect waves-light darken-4 green"><i class="fa fa-save"></i> INICIALIZAR</a>
                                                  </div>                    
                                              </div>
                                        </div>
                                      </form>
                                       
                                      </div>
                                       <div class="col s12 m4 l4">
                                          <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                                            <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 18px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                                        MATERIALES DESIGNADOS</div>
                                           <table id="example1" class="display" cellspacing="0" width="100%">
                                              <thead>
                                                <tr>
                                                  <th>Nombre Item</th> 
                                                  <th>Acciones</th>
                                                </tr>
                                              </thead>
                                              <tfoot>
                                                <tr>
                                                  <th>Nombre Item</th> 
                                                  <th>Acciones</th>
                                                </tr>
                                              </tfoot>
                                              <tbody>
                                                <?php
                                                foreach($movimiento->mostrarTodo("idadmejecutivo=".$idadmejecutivoSOLICITA." and tipomov=3 and estadoasignacion=1") as $mov)//idtipo=142
                                                {
                                                  
                                                   $inven=$inventario->muestra($mov['idinventario']);
                                                ?>
                                                <tr style="">
                                                   <td><?php echo $inven['nombre'] ?></td>
                                                   <td>
                                                    <button class="btn-jh waves-effect waves-light green" onclick="selecitem('<?php echo $mov['idmovimiento'] ?>','<?php echo $inven['nombre'] ?>','<?php echo $mov['idinventario'] ?>');"> <i class="fa fa-edit (alias)"></i> Selecionar </button>
                                                  </td> 
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
                          </div>
              </div>
            </div>
          </div>
 <div class="container">
            <div class="section">
              <div class="row" >
            
              </div>
            </div>     
            </div>
          <div class="container">
                    <div class="section">           
                        <div id="modal5" class="modal">
                          <div class="modal-content">                   
                                  <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        
                <table id="example2" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Operario</th>
                       <th>Carnet</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Operario</th>
                       <th>Carnet</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($vadmejecutivo->mostrarTodo("idtipo=162 and estado=1") as $ope)//idtipo=142
                    {
                      
                       $idadmejecutivoSel=$ope['idvadmejecutivo'];
                       $completonombre=$ope['nombre'].' '.$ope['paterno'].' ' .$ope['materno'];
                     
                    ?>
                    <tr style=""><!--<?php //echo $estilo ?>-->
                      <td><?php echo $completonombre ?></td>
                       <td><?php echo $ope['carnet'].' '.$ope['expedido'] ?></td>          

                      <td>
                        <button class="btn waves-effect waves-light orange" onclick="selecionadooper('<?php echo $idadmejecutivoSel ?>','<?php echo $completonombre ?>');"> <i class="fa fa-arrow-circle-right"></i> Seleccionar </button>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
                          </div>
                          <div class="modal-footer">
                            <a id="btnb" onclick="cerrar5();" class="btn waves-effect waves-light red"><i class="fa fa-clear"></i> CERRAR</a>
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
            //'copy', 'csv', 'excel', 'pdf', 'print'
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
 function cargaroperarios()
  {
    $('#modal5').openModal();
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
                  text: "Se designara la solicitud de ticket",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "SI",
                  closeOnConfirm: false
                }, function () {
                  var str = $( "#idform" ).serialize();
                  $.ajax({
                    url: "guardar.php",
                    type: "POST",
                    data: str,
                    success: function(resp){
                      setTimeout(function(){     
                            console.log(resp);
                            $('#idresultado').html(resp);  
                          }, 100);
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
  mat=$('#idmaterial').val();
  prio=$('#idprioridad').val();
  opernom=$('#idoperadornombre').val();
  obs=$('#idobservacion').val();  
  if(fec=="" || mat==" " || prio=="0" || opernom=="" || obs==""){
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

function selecionadooper(idejeSel,nombre)
  {
    $('#idadmejecutivoOPER').val(idejeSel);
    $('#idoperadornombre').val(nombre);
     $('#modal5').closeModal();
  }
  function selecitem(idmov,item,idinv)
  {
    $('#idmovimiento').val(idmov);
    $('#idmaterial').val(item);
    $('#idinventario').val(idinv);
  }

    </script>
  
</body>

</html>