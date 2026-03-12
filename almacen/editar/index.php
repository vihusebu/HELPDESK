<?php
  $ruta="../../";
  include_once($ruta."class/almacen.php");
  $almacen=new almacen; 
  include_once($ruta."class/dominio.php");
  $dominio=new dominio; 
  include_once($ruta."funciones/funciones.php");
  session_start();  

   extract($_GET);
 
  $valor=dcUrl($lblcode);
  $datop = $almacen->muestra($valor); 
  //$datop = array_shift($datop);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="Modificar Datos de Almacén";
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
          $idmenu=1119;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
           
           <div class="row section">
     
               
           <div class="col s12">
            <div class="col s12 m12 l2">&nbsp;</div>
            <div class="col s12 m12 l8">
               <fieldset class="formulario">
                   <legend><?php echo $hd_titulo; ?> </legend>
                 <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">
                 <input id="idalmacen" name="idalmacen" type="hidden" readonly value="<?php echo $valor; ?>">
                <div class="col s12 m12 l12">
                  
                    <div class="formcontent">  
                      <div class="row">  
                        <div id="valCarnet" class="col s12"></div>
                         
                         
                        <div class="input-field col s6">
                          <input id="idnombre" name="idnombre" type="text" class="validate" value="<?php echo $datop['nombre'] ?>">
                          <label for="idnombre">NOMBRE</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="idubicacion" name="idubicacion" type="text" class="validate active"  value="<?php echo $datop['ubicacion'] ?>">
                          <label for="idubicacion">UBICACIÓN</label>
                        </div>
                        <div class="input-field col s12">
                          <input id="iddescripcion" name="iddescripcion" type="text" class="validate"  value="<?php echo $datop['descripcion'] ?>">
                          <label for="iddescripcion">DESCRIPCION</label>
                        </div>
                         
                          <div class="input-field col s12" style="text-align: right;">
                          <a class="btn red" href="../"><i class="fa fa-reply"></i> Atrás</a>
                          <a id="btnSave" class="btn waves-effect waves-light blue"><i class="fa fa-save"></i> Actualizar</a>
                        </div> 


                                               
                      </div>
  
                         
                     
                    </div>
                </div>
              </form>
              </fieldset>
            </div>
           <div class="col s12 m12 l2">&nbsp;</div>
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
        if (validar()) {          
          swal({
            title: "CONFIRMACION",
            text: "Se Actualizará los datos",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#2c2a6c",
            confirmButtonText: "Actualizar",
            closeOnConfirm: false
          }, function () {
            var str = $( "#idform" ).serialize();
            $.ajax({
              url: "actualizar.php",
              type: "POST",
              data: str,
              success: function(resp){
                console.log(resp);
                $("#idresultado").html(resp);
              }
            }); 
          });
        }
        else{
           swal("DATOS FALTANTES");
        }
      });
      function validar(){
        retorno=true;
          alm=$('#idnombre').val();
        zon=$('#idzona').val();
        direccion=$('#iddireccion').val();
        if(alm=="" || zon=="" || direccion==""){
          retorno=false;
        }
        return retorno;
      }
      
    </script>
</body>

</html>