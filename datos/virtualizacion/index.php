<?php
  $ruta="../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/virtualizacion.php");
  $virtualizacion=new virtualizacion;
  include_once($ruta."funciones/funciones.php");
  session_start(); 
   $fechaHoy=date('Y-m-d');

      //if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["comentario"]) ){
      $to = "codinfinito.online";
      $subject = "Mensaje Enviado";
      $contenido .= "Nombre: heloiz\n";
      $contenido .= "Email: heloizccb@gmail.com\n\n";
      $contenido .= "Comentario: Bien venido a la prueba\n\n";
      $header = "From: codinfinito.online\nReply-To: heloizccb@gmail.com \n";
      $header .= "Mime-Version: 1.0\n";
      $header .= "Content-Type: text/plain";
      if(mail($to, $subject, $contenido ,$header)){
      echo "Mail Enviado.";
      }
      //}


$correo = 'heloizccb@gmail.com';
        $mensajex = 'HOLA';   
        $telefono = '777';
        $nombre = 'HZ';

      $header = "From: " . $correo . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-type: text/html; charset=utf-8";
        
        $mensaje =

            $from = 'De: ' . $correo . " \r\n"; 
        $to = "codinfinito.online";
        $subject = "Nuevo mensaje de ". $nombre ." A través de tu sitio web, Ivoré Indumentaria";

        if(mail($to,$subject, $mensaje,$header)) {
            echo 1;
        }else{
            echo 0;
        };
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="LISTA DE REGISTRO DE DATOS CLOUD Y VIRTUALIZACIÓN";
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
          $idmenu=1133;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row " >
              <div class="col s12 m8 l8" style="background: white; text-align: center; color:#024873; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <?php echo $hd_titulo; ?>
              </div>
              <div class="col s12 m4 l4" style="background: white; text-align: center; color:#024873; border-radius: 5px; border: #CBCBCB 1px solid">
                <a href="nuevo/" class="btn waves-effect darken-4 blue"><i class="fa fa-plus-square-o"></i> NUEVO</a>
              </div>
              
                    
              </div>
              
            </div>
          </div>
     
          <div class="container">
            <div class="section">
              <div class="row" >
              <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        
                <table id="example2" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Nro</th>
                      <th>Códido</th>
                      <th>Recurso</th> 
                       <th>Tipo</th>
                      <th>Proveedor/Plataforma</th>
                      <th>IP/Endpoint</th>
                      <th>CPU/RAM/Disco</th>
                      <th>Sistema Operativo</th>
                      <th>Ambiente (Prod/Dev/Test)</th>
                      <th>Propietario</th>
                      <th>Fecha Creación</th>
                      <th>Estado</th>
                      <th>Notas</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Nro</th>
                      <th>Códido</th>
                      <th>Recurso</th> 
                       <th>Tipo</th>
                      <th>Proveedor/Plataforma</th>
                      <th>IP/Endpoint</th>
                      <th>CPU/RAM/Disco</th>
                      <th>Sistema Operativo</th>
                      <th>Ambiente (Prod/Dev/Test)</th>
                      <th>Propietario</th>
                      <th>Fecha Creación</th>
                      <th>Estado</th>
                      <th>Notas</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $contar=0;
                    foreach($virtualizacion->mostrarTodo("") as $f)
                    {
                      $domestado=$dominio->muestra($f['estado']);                   
                      $lblcode=ecUrl($f['idvirtualizacion']);
                      $contar++;
                    ?>
                    <tr style="<?php echo $estilo ?>">
                      <td><?php echo $contar ?></td>
                      <td><?php echo $f['codigo'] ?></td>
                      <td><?php echo $f['recurso'] ?></td>
                      <td><?php echo $f['tipo'] ?></td>
                      <td><?php echo $f['proveedorplataforma'] ?></td>
                      <td><?php echo $f['ipendpoint'] ?></td>
                      <td><?php echo $f['cpuramdisco'] ?></td>
                      <td><?php echo $f['sistemaoperativo'] ?></td>
                      <td><?php echo $f['ambiente'] ?></td>                      
                      <td><?php echo $f['propietario'] ?></td>
                      <td><?php echo $f['fechacreado'] ?></td>
                      <td><?php echo $domestado['nombre'] ?></td>
                      <td><?php echo $f['notas'] ?></td>
                      <td>
                        <a href="editar/?lblcode=<?php echo $lblcode ?>" class="btn-jh waves-effect darken-4 orange"><i class="fa fa-pencil-square"></i> editar</a>
                        <button class="btn-jh waves-effect darken-4 red" onclick="elim('<?php echo $f['idvirtualizacion'] ?>');"><i class="fa fa-remov"></i> Eliminar</button>
                        
                       
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
            <!-- CREDITOS  -->
          
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
        "order": [[ 0, "asc" ]],
        buttons: [
           'excel',// 'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
         
    });
    //0=fecha actual dia
    //1=fecha cambiado
  function elim(id)
  {
     swal({
                  title: "¿Esta seguro?",
                  text: "ALIMINAR",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "Si, estoy seguro",
                   closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                 // var str = $( "#idform" ).serialize();
                  $.ajax({
                    url: "eliminar.php",
                    type: "POST",
                    data: "id="+id,
                    success: function(resp){
                      //alert(resp);
                      setTimeout(function(){     
                          console.log(resp);
                          $('#idresultado').html(resp);   
                        }, 1000);
                    }
                  }); 
                });
  }
    </script>
</body>

</html>