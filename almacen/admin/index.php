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
      $hd_titulo="Almacenes";
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
                  <h5 class="breadcrumbs-title"><i class="fa fa-tag"></i> <?php echo $hd_titulo; ?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="section">
              <div class="col s12 m12 l6">
                <table id="example" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Ubicación</th>
                      <th>Descripción</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sw=true;
                    foreach($almacen->mostrarTodo("") as $f)
                    {
                      $lblcode=ecUrl($f['idalmacen']);
                     
                      switch ($f['estado']) {
                        case '1':
                          $estilo="background-color: #C8F1D8;";
                        break;
                        case '0':
                          $estilo="background-color: #FEE5E5;";
                        break;
                       
                      }
                    ?>
                    <tr style="<?php echo $estilo ?>">
                      <td><?php echo $f['nombre'] ?></td>
                      <td><?php echo $f['ubicacion'] ?></td>
                      <td><?php echo $f['descripcion'] ?></td> 
                    
                      <td>
                        <?php 
                          switch ($f['estado']) {
                            case '1':
                              echo "HABILITADO";
                            break;
                            case '0':
                              echo "DESHABILITADO";
                            break;
                            
                          }
                        ?>
                      </td>
                               <td>
                     
                        <a href="../../inventarios/stock/?lblcode=<?php echo $lblcode ?>" class="btn-jh waves-effect darken-4 orange tooltipped" data-tooltip="Editar"  ><i class="fa fa-edit" ></i> EXAMINAR</a>
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