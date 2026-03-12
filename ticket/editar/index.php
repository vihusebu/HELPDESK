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


  //$valor=dcUrl($lblcode);
  //$dinsumo=$inventario->muestra($valor);
 // $dmarca=$marca->muestra($dinsumo['idmarca']);

   $fechaHoy=date('Y-m-d');
  $valor=dcUrl($lblcode);
  $tic=$ticket->muestra($valor);


  $idusuario=$_SESSION["codusuario"];
  $adress=$_SERVER['REQUEST_URI'] ;
  $_SESSION["codempresa"]=$valor;


 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="ACTUALIZAR DATOS SOLICITUD DE TICKETS";
      include_once($ruta."includes/head_basico.php");
      include_once($ruta."includes/head_tabla.php");
      include_once($ruta."includes/head_foto.php");
    ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
 <style type="text/css">   

.bordeado{
  border: 1px solid #d8d8d8; 
  border-radius:5px;
}

</style>
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
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12">
                 <!-- <h5 class="breadcrumbs-title"><i class="fa fa-tag"></i><?php //echo $ditem['nombre'] ?>
                  </h5> -->
                  
                  <ol class="breadcrumbs">
                  </ol>    
                </div>
              </div>   
            </div>
          </div>
          <div class="container">
              <div class="row">
               <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
               <div class="col s12 m2 l2" >
                <a href="../" class="btn-jh waves-effect waves-light blue"><i class="fa fa-reply"></i> </a>
                
              </div>
               <div class="col s12 m10 l10"><?php echo $hd_titulo; ?></div>
              </div>
              <div class="col s12 m8 l8">
               <div class="col s12 m12 l12" style="background: white; border-radius: 5px; border: #CBCBCB 1px solid;">

            <div id="persona" class="col s12 m12 l12  "><!-- blue lighten-4 -->

                 <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">

                  <input id="idticket" name="idticket" type="hidden" value="<?php echo $valor ?>">

                    <div class="formcontent"> 
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
              </form>
            </div>           
          </div>
               </div>
               <div class="col s12 m4 l4" style="background: white; border-radius: 5px; border: #CBCBCB 1px solid;">
  <div class="titulo">Imagen del producto</div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="editarfotoperfil">
                            <div class="ibox">
                                <div class="ibox-content">
                                    <div class="clients-list">
                                      <!-- The file upload form used as target for the file upload widget -->
                                      <form id="fileupload"  method="POST" enctype="multipart/form-data">
                                          <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
                                          <div class="row fileupload-buttonbar">
                                              <div class="col s12 m12 l12">
                                                <span class="btn green fileinput-button">
                                                  <i class="fa fa-folder-open-o"></i>
                                                  <span>Seleccionar Imagen</span>
                                                  <input type="file" name="files[]" multiple>
                                                </span>
                                                <button type="submit" class="btn blue start">
                                                  <i class="fa fa-save"></i>
                                                  <span>Confirmar Todo</span>
                                                </button>
                                              </div>
                                          </div>
                                          <!-- The table listing the files available for upload/download -->
                                          <div id="scroll">
                                            <div id="scrollin">
                                                <table role="presentation" class="table table-striped table-hover">
                                                <tbody class="files"></tbody>
                                                </table>
                                            </div>
                                          </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
          <div class="col s12 m8 l8">
               
           
                </div>
                <div class="col s12 m12 l4">
                
                </div>
              </div>    
            </div>
          </div>
          <?php
            //include_once("../../footer.php");
          ?>
        </section>
      </div>
    </div>
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
              <fieldset class="formulario">
                <legend>Campos de foto</legend>
                <center>
                  <span class="preview"></span>
                </center>
                <strong class="error text-danger"></strong>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="titulo[]" type="text" placeholder="Título..." class="validate">
                    <label for="idnombre">Título</label>
                  </div>
                  <div class="input-field col s12">
                    <input name="description[]" type="text" placeholder="Descripción..." class="validate">
                    <label for="idnombre">Descripción</label>
                  </div>
                </div>
              <input type="hidden" name="url_proc[]" value="<?php echo $adress;?>" style="visibility: hidden;" >
              <input type="hidden" name="id_usuario[]" value="<?php echo $idusuario;?>" style="visibility: hidden;" >
              <input type="hidden" name="tipo_foto[]" value="fotoSolicitudTicket" style="visibility: hidden;" >
              <input type="hidden" name="tipo_usuario[]" value="1" style="visibility: hidden;" >
              <input type="hidden" name="id_publicacion[]" value="<?php echo $valor;?>" style="visibility: hidden;">
              <input type="hidden" name="principal[]" value="1" style="visibility: hidden;">
              {% if (!i && !o.options.autoUpload) { %}
                <button class="btn blue start" disabled>
                    <i class="fa fa-save"></i>
                    <span>Confirmar</span>
                </button>
              {% } %}

              {% if (!i) { %}
                <button class="btn red cancel">
                    <i class="fa fa-trash"></i>
                    <span>Descartar</span>
                </button>
              {% } %}
              </fieldset>
            </td>

        </tr>

        {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade" >
                <td>
                  <fieldset class="formulario">
                        <legend>Foto</legend>
                    {% if (file.url) { %}
                        <center>
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery>
                            <img style="height: 210px;" src="{%=file.url%}">
                          </a>
                        </center>
              
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="idFileTitle" value="{%=file.title%}" placeholder="Sin título..." readonly="" type="text" class="validate">
                          </div>
                          <div class="input-field col s12">
                            <input id="idFileDes" name="{%=file.description%}" placeholder="Sin descripción..." readonly="" type="text" class="validate">
                          </div>
                        </div>
                    {% } %}
                    {% if (file.error) { %}
                        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                    {% } %}
                    {% if (file.deleteUrl) { %}
                        <button class="btn red delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                            <i class="fa fa-trash"></i>
                            <span>Eliminar</span>
                        </button>
                        <input type="checkbox" style="visibility: hidden;" name="delete" value="1" class="toggle">
                    {% } else { %}
                        <button class="btn btn-warning cancel">
                            <i class="fa fa-trash"></i>
                            <span>Cancelar</span>
                        </button>
                    {% } %}
                  </fieldset>
                </td>
            </tr>
        {% } %}
    </script>


    <div id="idresultado"></div>
    <!-- end -->
    <!-- jQuery Library -->
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php");
      include_once($ruta."includes/script_foto.php");
    ?>
    <script type="text/javascript">
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