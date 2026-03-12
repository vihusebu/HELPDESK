<?php
  $ruta="../../";
  include_once($ruta."class/almacen.php");
  $almacen=new almacen; 
  include_once($ruta."funciones/funciones.php");
  session_start();  

   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="Selección de Almacen para asignacion de item";
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
          $idmenu=1122;
          include_once($ruta."aside.php");
        ?>
            <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l2">&nbsp;</div>
              <div class="col s12 m12 l8" style="background: white; text-align: center; color:#024873; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <?php echo $hd_titulo; ?>
              </div>
              <div class="col s12 m12 l2">&nbsp;</div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="section">
              <div class="row">
               <div class="col s12 m12 l2">&nbsp;</div>
                  <div class="col s12 m12 l8">               
                    <div class="col s12 m12 l12" style="background: white; text-align: center; color:#024873; border-radius: 5px; border: #CBCBCB 1px solid;">
                      <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Ubicación</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sw=true;
                          foreach($almacen->mostrarTodo("") as $f)
                          {
                            $lblcode=ecUrl($f['idalmacen']);
                           
                          ?>
                          <tr>
                            <td><?php echo $f['nombre'] ?></td>
                            <td><?php echo $f['ubicacion'] ?></td>
                            <td><?php echo $f['descripcion'] ?></td> 
                          
                            <td>
                           
                              <a href="index.php?lblcode=<?php echo $lblcode ?>" class="btn-jh waves-effect darken-4 orange tooltipped" data-tooltip="Editar"  ><i class="fa fa-edit" ></i> EXAMINAR</a>
                            </td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                      </table>
                   </div>

                  </div>
                  <div class="col s12 m12 l2">&nbsp;</div>
              </div>
            </div>
          </div>
          
        </section>
      </div>
    </div>
    <div id="idresultado"></div>
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php");
      include_once($ruta."includes/script_tablax.php");
    ?>
    <script type="text/javascript">
         $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Bfrtip',
        "order": [[ 1, "desc" ]],
        buttons: [
           //'excel', 'pdf'
        ]
      });
    });

        function cambiaestado(id,estado){
      swal({
        title: "Estas Seguro?",
        text: "Cambiar su estado",
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