<?php
  $ruta="../../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/infraestructura.php");
  $infraestructura=new infraestructura;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."funciones/funciones.php");
  session_start();  

   extract($_GET);

 $valor=dcUrl($lblcode);
 $datoss=$infraestructura->muestra($valor);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="ACTUALIZAR DATOS DE REGISTRO DE INFRAESTRUCTURA";
      include_once($ruta."includes/head_basico.php");
    ?>
</head>
<body>
    <?php
      include_once($ruta."head.php");
    ?>
    <div id="main">
      <div class="wrapper">
        <?php
          $idmenu=1132;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row " >
              <div class="col s12 m12 l12" style="background: white; text-align: center; color:#024873; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <?php echo $hd_titulo; ?>
              </div>
              
                    
              </div>
              
            </div>
          </div>
           
           <div class="row section">
        <div class="col s12 m12 l12">               
           <div class="col s12 m12 l12">
            <div id="persona" class="col s12 m12 l12  "><!-- blue lighten-4 -->
                 <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">
                  <input id="idinfraestructura" name="idinfraestructura" type="hidden" value="<?php echo $valor ?>">
                <div class="col s12 m12 l12">
                    <div class="formcontent">  
                      <div class="row" style="font-size: 18px; border-radius: 5px; border:#CBCBCB 1px solid;">
                       
                        <div class="input-field col s12 m4 l4">
                          <input id="idcodigo" name="idcodigo" type="text" value="<?php echo $datoss['codigo'] ?>" class="validate">
                          <label for="idcodigo">Código</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idcompomente" name="idcompomente" type="text" value="<?php echo $datoss['compomente'] ?>" class="validate">
                          <label for="idcompomente">Componente</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idtipo" name="idtipo" type="text" value="<?php echo $datoss['tipo'] ?>" class="validate">
                          <label for="idtipo">Tipo</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idmodelo" name="idmodelo" type="text" value="<?php echo $datoss['modelo'] ?>" class="validate">
                          <label for="idmodelo">IP/Modelo/Especificaciones</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idubicacionfisica" name="idubicacionfisica" type="text" value="<?php echo $datoss['ubicacionfisica'] ?>" class="validate">
                          <label for="idubicacionfisica">Ubicación Física</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idubicionlogica" name="idubicionlogica" type="text" value="<?php echo $datoss['ubicionlogica'] ?>" class="validate">
                          <label for="idubicionlogica">Ubicación Lógica</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idipdirewall" name="idipdirewall" type="text" value="<?php echo $datoss['ipdirewall'] ?>" class="validate">
                          <label for="idipdirewall">IP/Direwall</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idresponsable" name="idresponsable" type="text" value="<?php echo $datoss['responsable'] ?>" class="validate">
                          <label for="idresponsable">Responsable</label>
                        </div>
                         <div class="input-field col s12 m4 l4">
                          <label>Estado</label>
                          <select id="idestado" name="idestado">
                            <option value="0">Seleccionar...</option>
                            <?php
                            foreach($dominio->mostrarTodo("tipo='ESTAINFRAES' ") as $f)
                            {
                              $sw="";
                                if ($datoss['estado']==$f['iddominio']) {
                                   $sw="selected";
                                }
                              ?>
                                <option <?php echo $sw ?> value="<?php echo $f['iddominio']; ?>"><?php echo $f['nombre']; ?></option>
                              <?php
                            }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idfechainstalacion" name="idfechainstalacion" type="date" value="<?php echo $datoss['fechainstalacion'] ?>" class="validate">
                          <label for="idfechainstalacion">Fecha Instalación</label>
                        </div>
                       
                          <div class="input-field col s12 m4 l4">
                          <label>MANTENIMIENTO</label>
                          <select id="idmantenimiento" name="idmantenimiento">
                            <option value="0">Seleccionar...</option>
                            <?php
                            foreach($dominio->mostrarTodo("tipo='MANTEINFRAES' ") as $f2)
                            {
                              $sw="";
                                if ($datoss['mantenimiento']==$f2['iddominio']) {
                                   $sw="selected";
                                }
                              ?>
                                <option <?php echo $sw ?> value="<?php echo $f2['iddominio']; ?>"><?php echo $f2['nombre']; ?></option>
                              <?php
                            }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="iddocumentacion" name="iddocumentacion" type="text" value="<?php echo $datoss['documentacion'] ?>" class="validate">
                          <label for="iddocumentacion">Documentación</label>
                        </div>
                         <div class="input-field col s12 m12 l12" align="right">
                        <a href="../" class="btn-jh waves-effect waves-light darken-4 red"><i class="fa fa-mail-reply-all"></i> Volver</a>
                          <a id="btnSave" class="btn-jh waves-effect waves-light darken-4 blue"><i class="fa fa-save"></i> Modificar</a>
                        </div>                      
                      </div>
                </div>
              </form>
            </div>           
          </div>

        </div>


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
    ?>
    <script type="text/javascript">
      $("#btnSave").click(function(){
        $('#btnSave').attr("disabled",true);
        if (validar()) 
        {          
                swal({
                  title: "¿Esta seguro?",
                  text: "Actualizar los datos",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "Si, estoy seguro",
                   closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                  var str = $( "#idform" ).serialize();
                  $.ajax({
                    url: "actualizar.php",
                    type: "POST",
                    data: str,
                    success: function(resp){
                      //alert(resp);
                      setTimeout(function(){     
                          console.log(resp);
                          $('#idresultado').html(resp);   
                        }, 1000);
                    }
                  }); 
                });
        }else{
          swal("ERROR","Complete con datos","error");
        }
      });
function validar(){
        retorno=true;
        nombre=$('#idnombre').val();
        if(nombre==""){
          retorno=false;
        }
        return retorno;
      }
    function limpiar()
      {
          document.getElementById("idform").reset();
      }
    </script>
</body>

</html>