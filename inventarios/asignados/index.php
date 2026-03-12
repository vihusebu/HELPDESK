<?php
  $ruta="../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."class/admejecutivo.php");
  $admejecutivo=new admejecutivo;
  include_once($ruta."class/rol.php");
  $rol=new rol;
  include_once($ruta."class/persona.php");
  $persona=new persona;
  include_once($ruta."funciones/funciones.php");
  session_start();  
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="LISTA DE ITEMS ASIGNADOS USUARIOS ";
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
          $idmenu=1123;
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


 <div class="row">
      <div class="col s12">       
        <div id="vestibulum" class="col s12  ">
          <div class="container">
            <div class="section">
              <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                <table id="example2" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>FOTO</th>
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
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($vadmejecutivo->mostrarTodo("estado=1") as $f)//idtipo=142
                    {
                      $lblcode=ecUrl($f['idvadmejecutivo']);
                      $lblcodep=ecUrl($f['idpersona']);
                      $deje=$admejecutivo->muestra($f['idvadmejecutivo']);
                      
                      $per=$persona->muestra($deje['idpersona']);
                      $idpedoc=$per['idpersona'];

                       $dfotodoc=$vfiles->mostrarUltimo("id_publicacion=".$idpedoc." and tipo_foto='foto'");

                        if (count($dfotodoc)>0) {
                          $rutaFotodoc=$ruta."persona/editar/server/php/".$idpedoc."/".$dfotodoc['name'];
                          }else{
                              $rutaFotodoc=$ruta."imagenes/user.png";
                          }
                    ?>
                    <tr>
                      <td><img style="width: 50px;" src="<?php echo $rutaFotodoc ?>" alt="" class="circle responsive-img valign profile-image"></td>
                      <td><?php echo $f['carnet']." ".$f['expedido']?></td>
                      
                      <td><?php echo $f['nombre']." ".$f['paterno']." ".$f['materno'] ?></td>
                      <td><?php echo $f['tiponombre'] ?></td>
                      <td>
                      
                        <a href="lista.php?lblcode=<?php echo $lblcode ?>"class="btn waves-effect darken-4 blue"><i class="fa fa-edit (alias)"></i> REVISAR</a> 
                      <!--  <a href="impresion/?lblcode=<?php //echo $lblcode ?>" class="btn-jh waves-effect darken-4 orange" target="_blank"><i class="fa fa-print"></i></a> -->
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
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
        $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
          $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            //'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });
     // $("#idcarnet").blur(function(){
        
      //7});
      function buscarCI()
      {
        carnet=$('#idcarnet').val();
        //alert(carnet);
        if (carnet!="") {
          $.ajax({
            url: "nuevo/verificarCI.php",
            type: "POST",
            data: "carnet="+carnet,
            success: function(resp){
              //alert(resp);
              console.log(resp);
              $('#valCarnet').html(resp).slideDown(500);
            }
          });
        }
      }
    function cambiaestado(id,estado){
      swal({
        title: "Estas Seguro?",
        text: "Cambiaras el estado al ejecutivo",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#28e29e",
        confirmButtonText: "Estoy Seguro",
        closeOnConfirm: false
      }, function () {      
        $.ajax({
          url: "cambiaestado.php",
          type: "POST",
          data: "id="+id+"&estado="+estado,
          success: function(resp){
            console.log(resp);
            $("#idresultado").html(resp);
          }   
        });
      }); 
    }
    </script>
</body>

</html>