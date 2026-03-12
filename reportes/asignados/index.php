<?php
  $ruta="../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
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
    $hd_titulo="LISTA DE ITEMS ASIGNADOS";
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
          $idmenu=1136;
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
                     <div class="col s12 m12 l2">
                      &nbsp;
                     </div>
                    <div class="col s12 m8 l8"><!--green lighten-5-->
                      <div class="card-content">
                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                    
                <table id="example2" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>CARNET</th>
                      <th>USUARIO</th>
                      <th>CARGO</th>
                      <th>OPCIONES</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th></th> 
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($vadmejecutivo->mostrarTodo("estado=1") as $f)//idtipo=142
                    {
                      $lblcodeeje=ecUrl($f['idvadmejecutivo']);
                     // $lblcodep=ecUrl($f['idpersona']);

                    ?>
                    <tr>
                      <td><?php echo $f['carnet']." ".$f['expedido']?></td>
                      
                      <td><?php echo $f['nombre']." ".$f['paterno']." ".$f['materno'] ?></td>
                      <td><?php echo $f['tiponombre'] ?></td>
                      <td>
                       <button id="btnSave" onclick="generar2('<?php echo $lblcodeeje ?>');" class="btn-jh cyan"> Generar Reporte</button>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
                       
                      </div>
                      </div>
                      </div> 
                      <div class="col s12 m2 l2">
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
            //'copy', 'excel', 'pdf', 'print'
        ]
      });
    });


function generar2(idadmeje)
{
  //iddom=$('#iddominio').val();
  
//alert(idadmeje);
  var lbl_us="<?php echo $lblcode ?>";
    popup=window.open('../pdf/inventarioasignado.php?lblcode='+lbl_us+'&lblcodeeje='+idadmeje);


}
    </script>
</body>

</html>