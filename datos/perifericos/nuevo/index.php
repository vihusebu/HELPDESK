<?php
  $ruta="../../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/periferico.php");
  $periferico=new periferico;
  include_once($ruta."funciones/funciones.php");
  session_start();  

   extract($_GET);

 // $valor=dcUrl($lblcode);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="NUEVO REGISTRO DE DATOS DE PERIFERICOS";
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
          $idmenu=1135;
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
                          <input id="idtipo" name="idtipo" type="text" class="validate">
                          <label for="idtipo">Tipo</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idmodelo" name="idmodelo" type="text" class="validate">
                          <label for="idmodelo">Modelo</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idnroserie" name="idnroserie" type="text" class="validate">
                          <label for="idnroserie">N° Serie</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idmarca" name="idmarca" type="text" class="validate">
                          <label for="idmarca">Marca</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idfechaadquisicion" name="idfechaadquisicion" type="date" class="validate">
                          <label for="idfechaadquisicion">Fecha Adquisición</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idasignado" name="idasignado" type="text" class="validate">
                          <label for="idasignado">Asignado a (Usuario/Departamento)</label>
                        </div>
                        
                       
                        <div class="input-field col s12 m4 l4">
                          <input id="idubicacion" name="idubicacion" type="text" class="validate">
                          <label for="idubicacion">Ubicación</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <label>Estado</label>
                          <select id="idestado" name="idestado">
                            <option value="0">Seleccionar...</option>
                            <?php
                            foreach($dominio->mostrarTodo("tipo='ESTAPERIFE' ") as $f)
                            {
                              ?>
                                <option value="<?php echo $f['iddominio']; ?>"><?php echo $f['nombre']; ?></option>
                              <?php
                            }
                            ?>
                          </select>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idconectado" name="idconectado" type="text" class="validate">
                          <label for="idconectado">Conectado a (Equipo Principal)</label>
                        </div>
                         <div class="input-field col s12 m4 l4">
                          <input id="idfechagarantia  " name="idfechagarantia" type="date" class="validate">
                          <label for="idfechagarantia">Garantía Hasta</label>
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
        nombre=$('#idtipo').val();
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