<?php
  $ruta="../../../";
  include_once($ruta."class/inventario.php");
  $inventario=new inventario;
  include_once($ruta."class/marca.php");
  $marca=new marca;
  include_once($ruta."class/umedida.php");
  $umedida=new umedida;
  include_once($ruta."funciones/funciones.php");
  session_start(); 
  extract($_GET);


  $valor=dcUrl($lblcode);
  $dinsumo=$inventario->muestra($valor);
  $dmarca=$marca->muestra($dinsumo['idmarca']);

  $idusuario=$_SESSION["codusuario"];
  $adress=$_SERVER['REQUEST_URI'] ;
  $_SESSION["codempresa"]=$valor;


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="EDITAR ITEM";
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
          $idmenu=1120;
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
                  <div class="col s6 m8 l8">
                    <div class="col s12 m12 l12" align="right">
                      <a class="btn orange" href="../"><i class="fa fa-reply"></i> Atrás</a>
                  <a href="../nuevo" class="btn waves-effect waves-light purple"><i class="fa fa-plus"></i> Nuevo</a> 
                    </div>  
                  <fieldset class="formulario">
                    <legend><?php echo $hd_titulo ?></legend>
                    <form class="col s12" id="idform" name="idform" action="return false" onsubmit="return false" method="POST">
                      <input type="hidden" name="idinventario" id="idinventario" value="<?php echo $valor; ?>">
                      <div class="row">
                        <div class="row">
                          <div class="input-field col col s6 m6">
                            <input id="idnombre" name="idnombre" type="text" class="validate" value="<?php echo $dinsumo['nombre'] ?>">
                            <label for="idnombre">Nombre Item</label>
                          </div>
                          <div class="input-field col s12 m6 l6">
                          <label>Unidad de medida </label>
                          <select id="idumedida" name="idumedida">
                            <option disabled value="0">Seleccionar</option> 
                            <?php
                              foreach($umedida->mostrarTodo("estado=1") as $f)
                              {
                                $sw="";
                                if ($dinsumo['idumedida']==$f['idumedida']) {
                                   $sw="selected";
                                }
                                ?>
                                  <option <?php echo $sw ?> value="<?php echo $f['idumedida']; ?>"><?php echo $f['short']; ?></option>
                                <?php
                              
                              }
                            ?>
                           
                          </select>
                        </div>
                          <div class="input-field col col s12 m6">
                            <input type="hidden" name="idmarca" id="idmarca" value="<?php echo $dinsumo['idmarca'] ?>">
                            <input id="idmarcaNombre" name="idmarcaNombre" value="<?php echo $dmarca['nombre'] ?>" readonly="" type="text" class="validate" placeholder="Preciona el botón seleccionar Marca">
                            <label for="idmarcaNombre">Marca</label>
                          </div>
                          <div class="input-field col col s12 m6">
                            <a id="btnMarcaSel" class="waves-effect waves-light btn-jh modal-trigger  purple" href="#modal1">Seleccionar Marca</a>
                          </div>
                           
                          <!--    <div class="input-field col col s12 m12">
                            <input id="idfabricante" name="idfabricante" type="text" class="validate" value="<?php //echo $dinsumo['fabricante'] ?>">
                            <label for="idfabricante">Fabricante</label>
                          </div> -->
                          <div class="input-field col s12">
                            <textarea id="iddesc" name="iddesc" class="materialize-textarea"><?php echo $dinsumo['descripcion'] ?></textarea>
                            <label for="iddesc">Descripcion</label>
                          </div>
                        </div>
                      </div>
                    </form>
                    <button id="btnSave" class="btn waves-effect light-green darken-4 indigo"> <i class="fa fa-save"></i> Guardar Cambios </button>
                  </fieldset>
                </div>
                <div class="col s12 m12 l4">
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
              <input type="hidden" name="tipo_foto[]" value="fotoItemInventarios" style="visibility: hidden;" >
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


    <div id="modal1" class="modal">
      <div class="modal-content">
        <fieldset class="formulario">
          <legend> Seleccionar Marca</legend>
          <form  class="col s12" id="idformMarca" name="idformMarca" action="return false" onsubmit="return false" method="POST">
            <div class="row">
              <div class="input-field col col s12 m4">
                <input id="idNmarca" name="idNmarca" type="text" class="validate">
                <label for="idNmarca">Nombre de la Nueva Marca</label>
              </div>
              <div class="input-field col col s12 m4">
                <input id="idNdesc" name="idNdesc" type="text" class="validate">
                <label for="idNdesc">Descripcion nueva Marca</label>
              </div>
              <div class="input-field col col s12 m4">
                <button id="BtnSaveMarca" class="btn waves-effect green"><i class="fa fa-save"></i> Guaradar</button>
              </div>
            </div>
          </form>
          <table id="tablajson" class="display" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>COD</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Sel.</th>
              </tr>
            </thead>
            <tbody>                         
            </tbody>
          </table>
        </fieldset>
      </div>
    </div>
    <div id="idresultado"></div>
    <!-- end -->
    <!-- jQuery Library -->
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php");
      include_once($ruta."includes/script_foto.php");
    ?>
    <script type="text/javascript">
      $("#BtnSaveMarca").click(function(){
        var str = $( "#idformMarca" ).serialize();
        nmar=$('#idNmarca').val();
        if (nmar=='')
         {
          swal("ERROR!", "Completar datos", "error");
         }else{
        $.ajax({
          url: "nuevaMarca.php",
          type: "POST",
          data: str,
          success: function(resp){
            setTimeout(function(){     
              console.log(resp);
              $('#idresultado').html(resp);
            }, 1000); 
          }
        });
        }
      });
      $("#btnMarcaSel").click(function(){
        listarMarcas();
      });
      function listarMarcas(){
        $("#tablajson").dataTable().fnDestroy();
        var table=$("#tablajson").dataTable({
          "ajax":{
            "method":"POST",
            "url":"lsitarMarcas.php"
          },
          "columns":[
            {"data":"idmarca"},
            {"data":"nombre"},
            {"data":"desc"},
            {"defaultContent":"<a class='btn-jh purple ideditar'><i class='mdi-navigation-check'></i> Seleccionar</a>"}
          ],
        });
        GetData("#tablajson tbody",table);
      }
      function GetData(tbody,table){
        $(tbody).on("click","a.ideditar",function(){
          var data=table.api().row( $(this).parents("tr") ).data();        
          console.log(data);
          $("#idmarcaNombre").val(data.nombre);
          $("#idmarca").val(data.idmarca);
          $('#modal1').closeModal();
        });
      }
      $("#btnSave").click(function(){
        swal({   
          title: "Estas Seguro?",   
          text: "Esta seguro de guardar cambios?",   
          type: "warning",   
          showCancelButton: true,   
          closeOnConfirm: false,   
          showLoaderOnConfirm: true,
        }, 
        function(){
          if (validarr()) {
                //$('#btnSave').attr("disabled",true);
            var str = $( "#idform" ).serialize();
            $.ajax({
              url: "guardar.php",
              type: "POST",
              data: str,
              success: function(resp){
                setTimeout(function(){     
                  console.log(resp);
                  $('#idresultado').html(resp);
                }, 1000); 
              }
            });
          }
          else{
            Materialize.toast('<span>Datos Invalidos Revise Por Favor</span>', 1500);
          }
        });
      });
      function validarr(){
        retorno=true;
        nom=$('#idnombre').val();
        mar=$('#idmarca').val();
        if(nom=="" || mar==""){
          retorno=false;
        }
        return retorno;
      }
      function validaFloat(numero)
      {
        if (!/^([0-9])*[.]?[0-9]*$/.test(numero))
        {
          swal("ERROR!", "Ingrese precio valido", "error");
          $('#idprecio').val("");
        }
         
      }
    </script>
</body>

</html>