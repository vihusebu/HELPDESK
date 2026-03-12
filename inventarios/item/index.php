<?php
  $ruta="../../";
  include_once($ruta."class/inventario.php");
  $inventario=new inventario;
  include_once($ruta."class/marca.php");
  $marca=new marca;
  include_once($ruta."funciones/funciones.php");

  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    $hd_titulo="LISTA DE INVENTARIOS ";
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
          $idmenu=1120;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12">
                  <!-- <h5 class="breadcrumbs-title"><i class="fa fa-tag"></i> <?php //echo $hd_titulo; ?></h5>-->
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="section">
                <div class="col s12 m12 l12" align="right">
                  <a href="nuevo/" class="btn cyan"><i class="fa fa-plus"></i> Nuevo Item</a>
                </div>
              
              <fieldset class="formulario">
                   <legend><div><i class="fa fa-plus"></i> <strong><?php echo $hd_titulo; ?></strong> </div></legend>
              <div class="col s12 m12 l6">
                <table id="example" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Nro.</th>
                      <th>Item</th>
                      <th>Marca</th>
                      <th>Descripción</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sw=true;
                    $contar=0;
                    foreach($inventario->mostrarTodo("") as $f)
                    {
                      $lblcode=ecUrl($f['idinventario']);
                      $mar=$marca->muestra($f['idmarca']);
                      $contar++;
                      ?>
                      <tr>
                        <td><?php echo $contar ?></td>
                        <td><?php echo $f['nombre'] ?></td>
                        <td><?php echo $mar['nombre'] ?></td>
                        <td><?php echo $f['descripcion'] ?></td>
                      <td>
                           
                          <a href="editar/?lblcode=<?php echo $lblcode ?>" class="btn-jh darken-4 cyan"><i class="fa fa-edit"></i> EDITAR</a>
                           <a onclick="cargarconfig('<?php echo $f['idinventario'] ?>');" class="btn-jh darken-4 blue modal-trigger" href="#modal1"><i class="fa fa-gears (alias)"></i> Configurar</a>
                         <!-- <button class="btn-jh red"><i class="fa fa-times"></i></button> -->
                        </td>
                      </tr>
                      <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </fieldset>
            </div>
          </div>
       <div class="container">
            <div class="section">
             <div class="row">
                <div id="modal1" class="modal">
                  <div class="modal-content"> 
                  <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">
                    <input id="idinventarioImp" name="idinventarioImp" type="hidden">
                       <div align="right">
                         <button class="btn-jh waves-effect waves-light red darken-4 modal-action modal-close"><i class="fa fa-times"></i></button>                         
                       </div>
                        
                 <div class="row">
                   <div class="col s12 m12 l12" align="center" ><label style="color:#00BBC7; text-decoration:none; font-size:25px;">CONFIGURAR LA CANTIDAD MINIMA QUE DEBE EXISTIR PARA LA ALERTA EN EL ALMACÉN </label>
                       </div>
                
                  <div id="" class="col s12 m12 l12 " style="border: 1px solid #00818C; border-radius: 5px; background-color: white"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12">
                        <div class="input-field col s12 m8 l8">
                          <input id="idnombreImp" name="idnombreImp" readonly type="text" class="validate">
                          <label for="idnombreImp">Nombre Item</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                          <input id="idminimoImp" name="idminimoImp" type="number" class="validate">
                          <label for="idminimoImp">Cantidad minimo</label>
                        </div>
                        
                      </div>
                      
                      </div>
                  </div>
                     
                 </div>

                    </form>
                  </div>
                  <div class="modal-footer">
                   <div class="col s12 m12 l12" style="text-align: right;"> 
                         <button onclick="registrar();" style="font-size: 18px;" class="btn green"><i class="fa fa-gears (alias)"></i> Actualizar</button> 
                        </div>
                  </div>
                </div>
             </div>
            </div>  
          </div>
          <?php
            //include_once("../footer.php");
          ?>
        </section>
      </div>
    </div>
    <div class="row">
    </div>
    <div id="idresultado"></div>
    <!-- end -->
    <!-- jQuery Library -->
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php");
      include_once($ruta."includes/script_tablax.php");
    ?>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            //'excel', 'pdf' 
        ]
      });
    });

function cargarconfig(id)
     {
      //alert(idped); 
          
        $.ajax({
          async: true,
          url: "cargar/cargar_config.php?idinventario="+id,
          type: "get",
          dataType: "html",
          success: function(data){
            var json = eval("("+data+")");

            $("#idinventarioImp").val(json.idinventario);
            $("#idnombreImp").val(json.nombre);
            $("#idminimoImp").val(json.minimo);
          }

        });
        
     }
  function registrar()
  {
    if (validar()) {
          swal({   
            title: "Estas Seguro?",   
            text: "Cambiar la configuración",   
            type: "warning",   
            showCancelButton: true,   
            closeOnConfirm: false,   
            showLoaderOnConfirm: true,
          }, 
          function(){
             var str = $( "#idform" ).serialize();
            $.ajax({
              url: "minimo.php",
              type: "POST",
              data: str,
              success: function(resp){
               // alert(resp);
                setTimeout(function(){     
                  console.log(resp);
                  $('#idresultado').html(resp);
                }, 1000); 
              }
            });
          });
        }else{
           swal("ERROR!", "Cantidad no valido", "error");
        }
  }
   function validar(retorno){
        var retorno=true;
        var min=$("#idminimoImp").val();
        if (min<="0") {
          retorno=false;
        }
        return retorno;
      }
    </script>
</body>

</html>