<?php
  $ruta="../../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/software.php");
  $software=new software;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."funciones/funciones.php");
  session_start();  

   extract($_GET);

 $valor=dcUrl($lblcode);
 $soft=$software->muestra($valor);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="ACTUALIZAR DATOS DE REGISTRO DE SOFTWARE";
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
          $idmenu=1130;
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
                  <input id="idsoftware" name="idsoftware" type="hidden" value="<?php echo $valor ?>">
                <div class="col s12 m12 l12">
                    <div class="formcontent">  
                      <div class="row" style="font-size: 18px; border-radius: 5px; border:#CBCBCB 1px solid;">
                       
                        <div class="input-field col s12 m4 l4">
                          <input id="idcodigo" name="idcodigo" type="text" value="<?php echo $soft['codigo'] ?>" class="validate">
                          <label for="idcodigo">Código</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idnombre" name="idnombre" type="text" value="<?php echo $soft['nombre'] ?>" class="validate">
                          <label for="idnombre">Nombre</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idversion" name="idversion" type="text" value="<?php echo $soft['version'] ?>" class="validate">
                          <label for="idversion">Versión</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idtipo" name="idtipo" type="text" value="<?php echo $soft['tipo'] ?>" class="validate">
                          <label for="idtipo">Tipo</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idlicencia" name="idlicencia" type="text" value="<?php echo $soft['licencia'] ?>" class="validate">
                          <label for="idlicencia">Licencia</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idclavefolio" name="idclavefolio" type="text" value="<?php echo $soft['clavefolio'] ?>" class="validate">
                          <label for="idclavefolio">Clave/Folio</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idfechainstalacion" name="idfechainstalacion" type="date" value="<?php echo $soft['fechainstalacion'] ?>" class="validate">
                          <label for="idfechainstalacion">Fecha de Instalación</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idvencimiento" name="idvencimiento" type="date" value="<?php echo $soft['vencimiento'] ?>" class="validate">
                          <label for="idvencimiento">Fecha Vencimiento</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idinstaladoenhardware" name="idinstaladoenhardware" type="text" value="<?php echo $soft['instaladoenhardware'] ?>" class="validate">
                          <label for="idinstaladoenhardware">Instalación en Hardware</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idresponsable" name="idresponsable" type="text" value="<?php echo $soft['responsable'] ?>" class="validate">
                          <label for="idresponsable">Responsable</label>
                        </div>
                         <div class="input-field col s12 m4 l4">
                          <input id="idcriticidad" name="idcriticidad" type="text" value="<?php echo $soft['criticidad'] ?>" class="validate">
                          <label for="idcriticidad">Criticidad</label>
                        </div>
                         <div class="input-field col s12 m4 l4">
                          <input id="idnotas" name="idnotas" type="text" value="<?php echo $soft['notas'] ?>" class="validate">
                          <label for="idnotas">Notas</label>
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