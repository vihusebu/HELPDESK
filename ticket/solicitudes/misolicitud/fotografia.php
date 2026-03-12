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

$valor3=dcUrl($lblcode3);//idsoluciondetalle
$soldet=$soluciondetalle->muestra($valor3);

$idusuario=$_SESSION["codusuario"];
  $adress=$_SERVER['REQUEST_URI'] ;
  $_SESSION["codempresa"]=$valor3;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="Fotografia de avance";
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
              <div class="row " >
              <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <div class="col s12 m12 l12" >
                  <a href="detalle.php?lblcode=<?php echo $lblcode ?>&lblcode2=<?php echo $lblcode2 ?>" class="btn-jh waves-effect waves-light darken-4 blue"><i class="fa fa-reply"></i> </a>
                <?php echo $hd_titulo; ?>
              </div>
              
              </div>
              
              </div>
            </div>
          </div>
          <div class="container">
              <div class="row">
              <div class="col s12 m4 l4">
               <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;  font-size: 15px;">
                Area:<b><?php echo $are['nombre'] ?></b>
                Tipo:<b><?php echo $tip['nombre'] ?></b><br>
                Problema:<b><?php echo $tic['problema'] ?></b><br>
                Descripción detallado:<b><?php echo $tic['descripcion'] ?></b><br>
                Fecha Solicitado:<b><?php echo $tic['fecha'] ?></b><br>
                Fecha Iniciado:<b><?php echo $sol['fecha'] ?></b><br>
                Asignado(OPERARIO):<b><?php echo $vadmeje['nombre'].' '.$vadmeje['paterno'] ?></b><br>
                ESTADO:<?php echo $estado ?><br>
                <div class="col s12 m12 l12" style="text-align: center;">
                  <img src="<?php echo $rutaFoto ?>"  width="300" >
                  </div>
                <div class="col s12 m12 l12" style="text-align: right;">
                  
                </div>
              </div>
               </div>
               <div class="col s12 m8 l8" style="background: white; border-radius: 5px; border: #CBCBCB 1px solid;">
                <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;  font-size: 15px; text-align: center;">
                <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 20px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                Datos de Avance registrado</div>
                
               Fecha Registro:<b><?php echo $soldet['fecha'] ?></b><br>
                Detalle del Avance de solución de ticket:<b><?php echo $soldet['avance'] ?></b>
                  <div class="col s12 m12 l12" >
                
                   </div>
              </div>
                 <div class="titulo">Registro de Fotografia</div>
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
              <input type="hidden" name="tipo_foto[]" value="fotoSolucionDetalle" style="visibility: hidden;" >
              <input type="hidden" name="tipo_usuario[]" value="1" style="visibility: hidden;" >
              <input type="hidden" name="id_publicacion[]" value="<?php echo $valor3;?>" style="visibility: hidden;">
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