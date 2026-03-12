<?php

  $ruta="../";
  include_once($ruta."class/almacen.php");
  $almacen=new almacen;
  include_once($ruta."class/dominio.php");
  $dominio=new dominio; 
  include_once($ruta."funciones/funciones.php");

  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    $hd_titulo="LISTA DE ALMACÉN ";
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
          $idmenu=1119;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12">
               <!--    <h5 class="breadcrumbs-title"><i class="fa fa-tag"></i> <?php echo $hd_titulo; ?></h5> -->
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="section">
              <div class="row">
                  <div class="col s12 m12 l1">&nbsp;</div>
              <div class="col s12 m12 l10">
                <div class="col s12 m12 l12" style="text-align: right;">
                 <a href="nuevo/" class="btn green"><i class="fa fa-plus"></i> Nuevo almacén</a>
                </div>
                 <fieldset class="formulario">
                   <legend><?php echo $hd_titulo; ?> </legend>
                   <div class="col s12 m12 l12">
                    <table id="example" class="display" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nro.</th>
                          <th>Almacen</th>
                          <th>Ubicación</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sw=true;
                        $contar=0;
                        foreach($almacen->mostrarTodo("") as $f)
                        {

                          $contar++;
                          $lblcode=ecUrl($f['idalmacen']);
                          ?>
                          <tr>
                            <td><?php echo $contar ?></td>
                            <td><?php echo $f['nombre'] ?></td>
                            <td><?php echo $f['ubicacion'] ?></td>
                            <td>
                               
                              <a href="editar/?lblcode=<?php echo $lblcode ?>" class="btn-jh orange"><i class="fa fa-edit"></i> EDITAR</a>
                              
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
              <div class="col s12 m12 l1">&nbsp;</div>

              </div>
              
              
            </div>
          </div>
          <?php
            include_once("../footer.php");
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
           //  'excel', 'pdf' 
        ]
      });
    });
    function recomendar(id,estado){
      //alert(estado);
      swal({
        title: "Recomendar ?",
        text: "El producto se mostrará en el slide de recomendados",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#e20a0b",
        confirmButtonText: "Si, Estoy Seguro!",
        closeOnConfirm: false
      }, function () {
        $.ajax({
          url: "recomendar.php",
          type: "POST",
          data:"id="+id+"&estado="+estado,
          success: function(resp){
            console.log(resp);
            $("#idresultado").html(resp);
          }
        });
      });
    }
    function destacar(id,estado){
      //alert(estado);
      swal({
        title: "Destacar ?",
        text: "El producto se mostrará en el slide principal",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#e20a0b",
        confirmButtonText: "Si, Estoy Seguro!",
        closeOnConfirm: false
      }, function () {
        $.ajax({
          url: "destacar.php",
          type: "POST",
          data:"id="+id+"&estado="+estado,
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