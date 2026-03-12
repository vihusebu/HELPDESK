<?php
  $ruta="../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/tipo.php");
  $tipo=new tipo;
  include_once($ruta."class/area.php");
  $area=new area;
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."class/admejecutivo.php");
  $admejecutivo=new admejecutivo;
  include_once($ruta."class/vusuario2.php");
  $vusuario2=new vusuario2;
  include_once($ruta."class/tipoticket.php");
  $tipoticket=new tipoticket;
  include_once($ruta."funciones/funciones.php");
  session_start();  

   extract($_GET);
$fechaHoy=date('Y-m-d');
$horaHoy=date('H:i:s');
 // $valor=dcUrl($lblcode);
$tic=$ticket->mostrarUltimo("activo=1");

$idusuariosol=$_SESSION["codusuario"];
$vusol=$vusuario2->muestra($idusuariosol);
//$perSol=$persona->muestra($vusol['idpersona']);
$admejesol=$admejecutivo->mostrarUltimo("idpersona=".$vusol['idpersona']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="REGISTRO DE NUEVO TICKET";
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
          $idmenu=1115;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
           
           <div class="row section">
        <div class="col s12 m12 l2">&nbsp;</div>
        <div class="col s12 m12 l8">
           <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
               
               <div class="col s12 m12 l12"><?php echo $hd_titulo; ?></div>
              </div>
               
           <div class="col s12 m12 l12">
            <div id="persona" class="col s12 m12 l12  "><!-- blue lighten-4 -->
                 <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">
                <div class="col s12 m12 l12">
                    <div class="formcontent">  
                      <div class="row">
                        <div class="col s12 m12 l12" style="background: #d7d7d7; text-align: center; font-size: 20px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">DATOS DEL TICKET (No editable)
                          </div>
                         <div class="col s12 m12 l12" style="">
                          <div class="col s12 m6 l6" style="text-align: right;">NUMERO DE TICKET:</div>
                          <div class="col s12 m6 l6"><b><?php echo $tic['idticket']+1 ?></b></div>

                          <div class="col s12 m6 l6" style="text-align: right;">FECHA DE SOLICITUD:</div>
                          <div class="col s12 m6 l6"><b><?php echo $fechaHoy ?></b></div>

                          <div class="col s12 m6 l6" style="text-align: right;">HORA SOLICITUD:</div>
                          <div class="col s12 m6 l6"><b><?php echo $horaHoy ?></b></div>

                          <div class="col s12 m6 l6" style="text-align: right;">USUARIO AD:</div>
                          <div class="col s12 m6 l6"><b><?php echo $vusol['usuario'] ?></b></div>

                          <div class="col s12 m6 l6" style="text-align: right;">NOMBRE DE SOLICITANTE:</div>
                          <div class="col s12 m6 l6"><b><?php echo $dusuario['nombre'].' '.$dusuario['paterno'] ?></b></div>

                          <div class="col s12 m6 l6" style="text-align: right;">DIRECCIÓN IP:</div>
                          <div class="col s12 m6 l6"><b><?php echo $admejesol['ipusuario'] ?></b></div>
                </div>
                        <div class="input-field col s12 m8 l8">
                          &nbsp;
                        </div>
                         <div class="col s12 m12 l12" style="background: #d7d7d7; text-align: center; font-size: 20px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">DATOS DE SOLICITUD
                          </div>
                        <div class="input-field col s12 m6 l6">

                        <label for="idtipoticket">Tipo Ticket</label>
                          <select id="idtipoticket" name="idtipoticket">
                            <option value="0">Seleccinar Tipo</option>
                            <?php
                              foreach($tipoticket->mostrarTodo("estado=1") as $titi)
                              {
                                                                
                                ?>
                                  <option value="<?php echo $titi['idtipoticket']; ?>"><b style="color:<?php echo $titi['color'] ?>"><?php echo $titi['nombre']; ?></b></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m6 l6">
                          <input id="idfecha" name="idfecha" readonly type="date" value="<?php echo $fechaHoy ?>" class="validate">
                          <label for="idfecha">Fecha Solicitud</label>
                        </div>
                       <div class="input-field col s12 m6 l6">
                        <label for="idtipo">Tipo</label>
                          <select id="idtipo" name="idtipo">
                            <option value="0">Seleccinar Tipo</option>
                            <?php
                              foreach($tipo->mostrarTodo("estado=1") as $tita)
                              {
                                ?>
                                  <option value="<?php echo $tita['idtipo']; ?>"><?php echo $tita['nombre']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m6 l6">
                          <label for="idarea">Area</label>
                          <select id="idarea" name="idarea">
                            <option value="0">Seleccionar Area</option>
                            <?php
                              foreach($area->mostrarTodo("estado=1") as $ar)
                              {
                                ?>
                                  <option value="<?php echo $ar['idarea']; ?>"><?php echo $ar['nombre']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                         <div class="input-field col s12 m12 l12">
                          <input id="idproblema" name="idproblema" type="text" class="validate">
                          <label for="idproblema">Problema Principal</label>
                        </div>
                        <div class="input-field col s12 m12 l12">

                        <textarea id="iddescripcion" name="iddescripcion" class="materialize-textarea" length="500"></textarea>
                        <label for="iddescripcion">Descripción (detallado)</label>
                        </div>
                        <div class="col s12 m12 l12" style="text-align: right;">
                          <a id="btnSave" class="btn waves-effect waves-light darken-4 red"><i class="fa fa-save"></i> Guardar</a>
                          </div>                     
                      </div>
                </div>
              </form>
            </div>           
          </div>

        </div>
        <div class="col s12 m12 l2">&nbsp;</div>

          
            </div> 
          <?php
           // include_once("../footer.php");
          ?>
        </section>
      </div>
    </div>
    <div id="idresultado"></div>
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
        "order": [[ 0, "asc" ]],
        buttons: [
            //'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
         
    });
      $("#btnSave").click(function(){
        $('#btnSave').attr("disabled",true);
        if (validar()) 
        {       
       // alert('sadjaksjd');   
                swal({
                  title: "¿Esta seguro?",
                  text: "Se registrara nuevo",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "Registrar",
                  closeOnConfirm: false
                }, function () {
                  var str = $( "#idform" ).serialize();
                  //alert(str);
                  $.ajax({
                    url: "guardar.php",
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
  pro=$('#idproblema').val();
  des=$('#iddescripcion').val();
  tip=$('#idtipo').val(); 
  tiptic=$('#idtipoticket').val(); 
  are=$('#idarea').val();  
  if(pro=="" || des=="" || tip=="0" || are=="0" || tiptic=="0"){
    retorno=false;
  }
  return retorno;
}
    function limpiar()
      {
          document.getElementById("idform").reset();
      }

      function cargapoopup()
  {
    $('#modal2').openModal();
  }
  function seleccionarejecutivo(id,nombre)
       {
        $('#idnombreImport').val(nombre);
        $('#idadmejecutivoImport').val(id);
        $('#modal2').closeModal();
       }
    </script>
</body>

</html>