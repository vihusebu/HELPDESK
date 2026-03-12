<?php
  $ruta="../../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/licencia.php");
  $licencia=new licencia;
  include_once($ruta."funciones/funciones.php");
  session_start();  

   extract($_GET);

 // $valor=dcUrl($lblcode);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="NUEVO REGISTRO DE DATOS DE LICENCIA";
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
          $idmenu=1134;
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
                <div class="col s12 m12 l12">
                    <div class="formcontent">  
                      <div class="row" style="font-size: 18px; border-radius: 5px; border:#CBCBCB 1px solid;">
                       
                        <div class="input-field col s12 m4 l4">
                          <input id="idcodigo" name="idcodigo" type="text" class="validate">
                          <label for="idcodigo">Código</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idsoftware" name="idsoftware" type="text" class="validate">
                          <label for="idsoftware">Software</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idtipolicencia" name="idtipolicencia" type="text" class="validate">
                          <label for="idtipolicencia">Tipo Licencia</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idclave" name="idclave" type="text" class="validate">
                          <label for="idclave">N° Licencia/Clave</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idproveedor" name="idproveedor" type="text" class="validate">
                          <label for="idproveedor">Proveedor</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idfechaadquicicion" name="idfechaadquicicion" type="date" class="validate">
                          <label for="idfechaadquicicion">Fecha Adquisición</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idfechaexpiracion" name="idfechaexpiracion" type="date" class="validate">
                          <label for="idfechaexpiracion">Fecha Expiración</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idcantidad" name="idcantidad" type="text" class="validate">
                          <label for="idcantidad">Cantidad</label>
                        </div>
                         
                        <div class="input-field col s12 m4 l4">
                          <input id="idasignado" name="idasignado" type="text" class="validate">
                          <label for="idasignado">Asignado a (Usuario/Departamento)</label>
                        </div>
                       
                        <div class="input-field col s12 m4 l4">
                          <input id="idcosto" name="idcosto" type="text" class="validate">
                          <label for="idcosto">Costo</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <label>Estado</label>
                          <select id="idestado" name="idestado">
                            <option value="0">Seleccionar...</option>
                            <?php
                            foreach($dominio->mostrarTodo("tipo='ESTALICEN' ") as $f)
                            {
                              ?>
                                <option value="<?php echo $f['iddominio']; ?>"><?php echo $f['nombre']; ?></option>
                              <?php
                            }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <label>Renovación Automática</label>
                          <select id="idrenovacion" name="idrenovacion">
                            <option value="0">Seleccionar...</option>
                            <?php
                            foreach($dominio->mostrarTodo("tipo='RENOAUTO' ") as $f2)
                            {
                              ?>
                                <option value="<?php echo $f2['iddominio']; ?>"><?php echo $f2['nombre']; ?></option>
                              <?php
                            }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idnotas" name="idnotas" type="text" class="validate">
                          <label for="idnotas">NOTAS</label>
                        </div>
                         <div class="input-field col s12 m12 l12" align="right">
                        <a href="../" class="btn-jh waves-effect waves-light darken-4 red"><i class="fa fa-mail-reply-all"></i> Volver</a>
                          <a id="btnLimpiar" onclick="limpiar();" class="btn-jh waves-effect waves-light grey"><i class="fa fa-file-o"></i> Limpiar</a>
                          <a id="btnSave" class="btn-jh waves-effect waves-light darken-4 blue"><i class="fa fa-save"></i> Guardar</a>
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
                  text: "Se registrara nuevo",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "Registrar",
                   closeOnConfirm: false,
                    showLoaderOnConfirm: true
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
        nombre=$('#idsoftware').val();
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