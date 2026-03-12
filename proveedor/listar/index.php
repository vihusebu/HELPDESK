<?php
  $ruta="../../";
  include_once($ruta."class/proveedor.php");
  $proveedor=new proveedor; 
  session_start();  

   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="Proveedor";
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
          $idmenu=1127;
          include_once($ruta."aside.php");
        ?>
            <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12">
               <!--   <h5 class="breadcrumbs-title"><i class="fa fa-tag"></i> <?php// echo $hd_titulo; ?></h5> -->
                </div>
                 
              </div>
            </div>
          </div>
          <div class="container">
            <div class="section">
              <div class="col s12 m12 l12" align="right">
                  <a class="btn darken-4 blue" href="../nuevo"><i class="fa fa-plus"></i> NUEVO</a>
                </div>
              <fieldset class="formulario">
                   <legend><div><i class="fa fa-list-alt"></i> <strong><?php echo $hd_titulo; ?></strong> </div></legend> 
                    
              <div class="col s12 m12 l12">
                <table id="example" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Empresa</th>
                      <th>Nit</th>
                      <th>Direccion</th>
                      <th>Encargado</th>
                      <th>telefono</th>
                      <th>Estado</th>
                     
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sw=true;
                    $contar=0;
                    foreach($proveedor->mostrarTodo("") as $f)
                    {
                      $contar++;
                      $lblcode=ecUrl($f['idproveedor']);
                     
                      switch ($f['estado']) {
                        case '1':
                          $estilo="background-color: #E8FEEF;";
                        break;
                        case '0':
                          $estilo="background-color: #FEE5E5;";
                        break;
                       
                      }
                    ?>
                    <tr style="<?php echo $estilo ?>">
                      <td><?php echo $contar ?></td>
                      <td><?php echo $f['empresa'] ?></td>
                      <td><?php echo $f['nit'] ?></td>
                      
                      <td><?php echo $f['direccion'] ?></td>
                      <td><?php echo $f['encargado'] ?></td>
                      <td><?php echo $f['telefono'] ?></td>
                    
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
                        <?php 
                          if ($f['estado']==0) {
                            ?>
                              <button onclick="cambiaestado('<?php echo $lblcode ?>','1');" class="btn-jh darken-4 green tooltipped" data-position="top" data-delay="50" data-tooltip="Habilitar" ><i class="mdi-action-thumb-up"></i></button>
                            <?php
                          }else {
                            ?>
                              <a onclick="cambiaestado('<?php echo $lblcode ?>','0');" class="btn-jh waves-effect darken-4 red tooltipped" data-position="top" data-delay="50" data-tooltip="Dar de Baja"><i class="mdi-action-thumb-down"></i></a>
                            <?php
                          }
                        ?>
                        <a href="../editar/?lblcode=<?php echo $lblcode ?>" class="btn-jh waves-effect darken-4 blue tooltipped" data-tooltip="Editar"  ><i class="fa fa-edit" ></i> EDITAR </a>
                        
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
        "order": [[ 0, "asc" ]],
        buttons: [
            //'csv', 'excel', 'pdf'
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