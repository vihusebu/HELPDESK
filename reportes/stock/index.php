<?php
  $ruta="../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/almacen.php");
  $almacen=new almacen;
  include_once($ruta."funciones/funciones.php");
  session_start();


  $idus=$_SESSION["codusuario"];
  $lblcode=ecUrl($idus);  
  //$mesAnteriorInicio= date("Y-m-01",strtotime($fecha_actual."- 1 month"));
  $mesInicio= date("Y-m-01");
  $mesFin= date("Y-m-d");
              
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    $hd_titulo="LISTADO GENERAL DE ALMACENES (REPORTE DE STOCK)";
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
          $idmenu=1139;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                 <div class="col s12 m12 l12" style="background: white; text-align: center; color:#006458; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <?php echo $hd_titulo; ?>
              </div>
              </div>
            </div>
          </div>
     
          <div class="container">
            <div class="section">
              <div class="row">
                     <div class="col s12 m12 l4">
                      &nbsp;
                     </div>
                    <div class="col s12 m12 l4"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        
                        <div class="input-field col s12 m12 l12">
                          <select id="idalmacen" name="idalmacen">
                             <label for="idalmacen">Almacen</label>
                            <option disabled value="0">Seleccionar</option>
                            <?php
                              foreach($almacen->mostrarTodo("") as $f)
                              {
                                ?>
                                  <option value="<?php echo $f['idalmacen']; ?>"><?php echo $f['nombre'] ?></option>
                                <?php
                              }
                            ?>
                          </select>
                        </div>
                        <div class="col s12 m12 l12" style="text-align: right;"> 
                         <button id="btnSave" onclick="generar2();" style="font-size: 18px; width: 100%;" class="btn-jh cyan"> Generar Reporte</button> 
                        </div>
                      </div>
                      </div>
                      </div> 
                      <div class="col s12 m12 l4">
                      &nbsp;
                      </div>
             
              </div>
            </div>     
            </div>

          </div>
        </section>
      </div>
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
      $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
      });
        $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
      });
          $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
      });
    });


function generar2()
{
  idalm=$('#idalmacen').val();
  

  var lbl_us="<?php echo $lblcode ?>";
    popup=window.open('../pdf/stock_almacen.php?lblcode='+lbl_us+'&idalmacen='+idalm);


}
    </script>
</body>

</html>