<?php
  $ruta="../../../";
  include_once($ruta."class/vinventario.php");
  $vinventario=new vinventario;
  include_once($ruta."class/almacen.php");
  $almacen=new almacen;
  include_once($ruta."class/proveedor.php");
  $proveedor=new proveedor;
  include_once($ruta."class/umedida.php");
  $umedida=new umedida;
  include_once($ruta."funciones/funciones.php");
  session_start(); 
  extract($_GET);


  $valor=dcUrl($lblcode);
  $dinventario=$vinventario->muestra($valor);
  $umed=$umedida->muestra($dinventario['idumedida']);


  $valor2=dcUrl($lblcode2);
  $dalmacen=$almacen->muestra($valor2);


  $idusuario=$_SESSION["codusuario"];
  $adress=$_SERVER['REQUEST_URI'] ;
  $_SESSION["codempresa"]=$valor;


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="INGRESO";
      include_once($ruta."includes/head_basico.php");
      include_once($ruta."includes/head_tabla.php"); 
    ?>  
</head>
<body>
    <?php
      include_once($ruta."head.php");
    ?>
    <div id="main">
      <div class="wrapper">
        <?php
          $idmenu=1121;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12" align="right">
                  <a href="../?lblcode=<?php echo $lblcode2 ?>" class="btn waves-effect waves-light red"><i class="fa fa-reply"></i> Atras</a>    
                </div>
              </div>   
            </div>
          </div>
          <div class="container">
              <div class="row"> 

                 <div class="col s12 m6 l4">
                   <fieldset class="formulario">
                   <legend>DATOS DE INVENTARIO</legend>
                           <div class="col s4 m4 l4 orange-text">ALMACÉN: </div>
                            <div class="col s8 m8 l8" style="color: #3E9E4B; font-size: 20px;"><?php echo $dalmacen['nombre'] ?> </div>
                            <div class="col s4 m4 l4 orange-text">NOMBRE: </div>
                            <div class="col s8 m8 l8"><?php echo $dinventario['item'] ?> </div>

                            <div class="col s4 m4 l4 orange-text">MARCA: </div>
                            <div class="col s8 m8 l8"><?php echo $dinventario['marca'] ?> </div>

                            <div class="col s4 m4 l4 orange-text">Unidad de medida: </div>
                            <div class="col s8 m8 l8"><?php echo $umed['nombre'] ?> </div>

                             <div class="col s4 m4 l4 orange-text">Fabricante: </div>
                            <div class="col s8 m8 l8"><?php echo $dinventario['fabricante'] ?> </div>

                             <div class="col s4 m4 l4 orange-text">Descripción: </div>
                            <div class="col s8 m8 l8"><?php echo $dinventario['descripcion'] ?> </div>
                        </fieldset>
                     </div>
                 <div class="col s12 m6 l8">
                  <fieldset class="formulario">
                   <legend>DATOS DE INGRESO</legend>
                  <form class="col s12" id="idform" name="idform" action="return false" onsubmit="return false" method="POST">
                      <input type="hidden" name="idinventario" id="idinventario" value="<?php echo $valor; ?>">
                      <input id="idalmacen"  name="idalmacen" type="hidden"   value="<?php echo $valor2 ?>">
                            <div class="input-field col s12 m6 l6">
                              <input id="idcantidad"  name="idcantidad" type="number" class="validate">
                              <label for="idcantidad">Cantidad de Ingreso</label>
                            </div> 
                            
                            <div class="input-field col s12 m6 l6">
                              <label>Proveedor</label>
                              <select id="idproveedor" name="idproveedor">
                                <?php
                                foreach($proveedor->mostrarTodo("estado=1") as $f)
                                {
                                  ?>
                                    <option value="<?php echo $f['idproveedor']; ?>" ><?php echo $f['empresa']; ?></option> 
                                  <?php
                                }
                                ?>
                              </select>
                            </div>
                          
                          
                          
                          <div class="input-field col s12 m12 l12">
                            <input id="iddescripcion"  name="iddescripcion" type="text"  class="validate">
                            <label for="iddescripcion">Descripción</label>
                          </div>
                          <div class="input-field col s12 m6 l6">
                            <input id="idfecha"  name="idfecha" type="date" value="<?php echo date('Y-m-y') ?>" class="validate">
                            <label for="idfecha">Fecha Ingreso</label>
                          </div>
                          <div class="input-field col s12 m6 l6">
                              <input id="idfechavalidad"  name="idfechavalidad" type="date"  class="validate">
                              <label for="idfechavalidad">Fecha de garantia</label>
                            </div>
                          <div class="col col s12 m12" align="center">
                             <button id="btnSave" class="btn waves-effect light-green darken-4 indigo"> <i class="fa fa-save"></i> Guardar INGRESO </button>
                          </div>


                    </form>
                    </fieldset>
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
   
    <div id="idresultado"></div>
    <!-- end -->
    <!-- jQuery Library -->
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php"); 
    ?>
    <script type="text/javascript">
      $("#btnSave").click(function(){
           if (validarr()) {
          swal({   
            title: "Estas Seguro?",   
            text: "Se registrara el Ingreso",   
            type: "warning",   
            showCancelButton: true,   
            closeOnConfirm: false,   
            showLoaderOnConfirm: true,
          }, 
          function(){
             var str = $( "#idform" ).serialize();
            $.ajax({
              url: "guardar.php",
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
           Materialize.toast('<span>Datos Invalidos Revise Por Favor</span>', 1500);
        }
      });



      function validarr(){
        retorno=true;
        cantidad=$('#idcantidad').val();
        fecha=$('#idfechavalidad').val();
        if(cantidad=="" || fecha==""){
          retorno=false;
        }
        return retorno;
      }
      function validaFloat(numero)
      {
        if (!/^([0-9])*[.]?[0-9]*$/.test(numero))
        {
          swal("ERROR!", "Ingrese precio valido o fecha de ingreso", "error");
          $('#preciocompra').val("");
        }else{
            calcular();
        }
         
      }
 
        
    </script>
      }
</body>

</html>