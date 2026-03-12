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
  include_once($ruta."funciones/funciones.php");
  session_start();  

   extract($_GET);
 $fechaHoy=date('Y-m-d');
  $valor=dcUrl($lblcode);
  $tic=$ticket->muestra($valor);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="ACTUALIZAR DATOS SOLICITUD DE TICKETS";
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
          $idmenu=1116;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
           
           <div class="row section">
        <div class="col s12 m12 l2">&nbsp;</div>
        <div class="col s12 m12 l8">
           <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
               <div class="col s12 m2 l2" >
                <a href="../" class="btn-jh waves-effect waves-light blue"><i class="fa fa-reply"></i> </a>
                
              </div>
               <div class="col s12 m10 l10"><?php echo $hd_titulo; ?></div>
              </div>
               
           <div class="col s12 m12 l12">

            <div id="persona" class="col s12 m12 l12  "><!-- blue lighten-4 -->

                 <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">

                  <input id="idticket" name="idticket" type="hidden" value="<?php echo $valor ?>">
                <div class="col s12 m12 l12">

                    <div class="formcontent">  
                      <div class="row">
                        <p style="color:green;">Obs: Se actualiza datos siempre y cuando solicitud esta en ESTADO PENDIENTE.</p>
                        <div class="input-field col s12 m8 l8">
                          &nbsp;
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idfecha" name="idfecha" readonly type="date" value="<?php echo $tic['fecha'] ?>" class="validate">
                          <label for="idfecha">Fecha Solicitud</label>
                        </div>
                       <div class="input-field col s12 m6 l6">
                        <label for="idtipo">Tipo</label>
                          <select id="idtipo" name="idtipo">
                            <option disabled value="0">Seleccinar Tipo</option>
                            <?php
                              foreach($tipo->mostrarTodo("estado=1") as $tita)
                              {
                                $sw="";
                                if ($tic['idtipo']==$tita['idtipo']) {
                                   $sw="selected";
                                }
                                ?>
                                  <option <?php echo $sw ?> value="<?php echo $tita['idtipo']; ?>"><?php echo $tita['nombre']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m6 l6">
                          <label for="idarea">Area</label>
                          <select id="idarea" name="idarea">
                            <option disabled value="0">Seleccionar Area</option>
                            <?php
                              foreach($area->mostrarTodo("estado=1") as $ar)
                              {
                                $sw2="";
                                if ($tic['idarea']==$ar['idarea']) {
                                   $sw2="selected";
                                }
                                ?>
                                  <option <?php echo $sw2 ?> value="<?php echo $ar['idarea']; ?>"><?php echo $ar['nombre']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                         <div class="input-field col s12 m12 l12">
                          <input id="idproblema" name="idproblema" type="text" value="<?php echo $tic['problema'] ?>"  class="validate">
                          <label for="idproblema">Problema Principal</label>
                        </div>
                        <div class="input-field col s12 m12 l12">

                        <textarea id="iddescripcion" name="iddescripcion" class="materialize-textarea" length="500"><?php echo $tic['descripcion'] ?></textarea>
                        <label for="iddescripcion">Descripción (detallado)</label>
                        </div>
                        <div class="col s12 m12 l12" style="text-align: right;">
                          <a id="btnSave" class="btn waves-effect waves-light darken-4 cyan"><i class="fa fa-save"></i> ACTUALIZAR</a>
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
                  text: "Actualizar datos de solicitud de ticket",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "Registrar",
                  closeOnConfirm: false
                }, function () {
                  var str = $( "#idform" ).serialize();
                  $.ajax({
                    url: "actualizar.php",
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
  are=$('#idarea').val();  
  if(pro=="" || des=="" || tip=="0" || are=="0"){
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