<?php
 
  $ruta="../";  
  session_start();
  include_once($ruta."funciones/funciones.php");
  $lblcode=ecUrl(3898);
  //echo $lblcode;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo=$_SESSION["short"];
      $hd_titulo2=$_SESSION["descripcion"];
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
          $idmenu=1000;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          
          <div id="breadcrumbs-wrapper">
            <div class="container">

               <h4 class="header">SISTEMA HELP DESk PARA ASIGNACIÓN DE TICKETS DE ATENCIÓN</h4>
            </div>
          </div> 
          <div class="container">
            <div class="section">
              <div class="row">
                <div id="media-slider">
            
            <div class="row">
              <div class="col s12 m3 l2">
                <p>Descripcion del sistema</p>
                <div id="flight-card" class="card">
                                    <div class="card-header orange darken-2">
                                        <div class="card-title">
                                            <h4 class="flight-card-title">USUARIOS</h4>
                                            <p class="flight-card-date">Usuarios del sistema</p>
                                        </div>
                                    </div>
                <div class="card-content-bg white-text" style="background-image: url('<?php echo $ruta ?>imagenes/slide/S2.jpg');">

                                        <div class="card-content">
                                            <div class="row flight-state-wrapper">
                                                <div class="col s5 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin"></h4>
                                                        <p class="ultra-small"></p>
                                                    </div>
                                                </div>
                                                <div class="col s2 m2 l2 center-align"style="font-size: 25px;">
                                                    <i class="fa fa-group (alias)"></i>
                                                </div>
                                                <div class="col s5 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin"></h4>
                                                        <p class="ultra-small"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                   </div>
              </div>
              <div class="col s12 m6 l8">
                <div class="slider">
                  <ul class="slides">
                    <li>
                      <img style="width: 100%;" src="<?php echo $ruta ?>imagenes/slide/SLIDE2.jpg" alt="img-1" >
                      <!-- random image -->
                      <div class="caption center-align">
                        <h3>SISTEMA HELP DESk PARA ASIGNACIÓN DE TICKETS DE ATENCIÓN</h3>
                        <h5 class="light grey-text text-lighten-3">Agilizando los procesos</h5>
                      </div>
                    </li>
                    <li>
                      <img src="<?php echo $ruta ?>imagenes/slide/SLIDE3.jpg" alt="img-2">
                      <!-- random image -->
                      <div class="caption left-align">
                        <h3>ASIGNACIÓN DE TICKETS DE ATENCIÓN</h3>
                        <h5 class="light grey-text text-lighten-3">Procesos rapidos</h5>
                      </div>
                    </li>
                    <li>
                      <img src="<?php echo $ruta ?>imagenes/slide/SLIDE1.jpg" alt="img-3">
                      <!-- random image -->
                      <div class="caption right-align">
                        <h3>HEPL DESK</h3>
                        <h5 class="light grey-text text-lighten-3">Mejorar en atención</h5>
                      </div>
                    </li>
                  </ul>
                </div>

              </div>
              <div class="col s12 m3 l2">
                <p>Descripcion del sistema</p>
                <div id="flight-card" class="card">
                                    <div class="card-header orange darken-2">
                                        <div class="card-title">
                                            <h4 class="flight-card-title">TICKETS <i class="fa fa-ticket"></i></h4>
                                            <p class="flight-card-date">Tickets de atención</p>
                                        </div>
                                    </div>
                <div class="card-content-bg white-text" style="background-image: url('<?php echo $ruta ?>imagenes/slide/S4.jpg');">

                                        <div class="card-content">
                                            <div class="row flight-state-wrapper">
                                                <div class="col s5 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin"></h4>
                                                        <p class="ultra-small"></p>
                                                    </div>
                                                </div>
                                                <div class="col s2 m2 l2 center-align" style="font-size:25px;">
                                                    <i class="fa fa-ticket"></i>
                                                </div>
                                                <div class="col s5 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin"></h4>
                                                        <p class="ultra-small"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                   </div>
              </div>
            </div>
          </div> 
              </div>
              
            </div>
          </div>


           
         
          <!--end container-->
        </section>
      </div>
    </div>
    <!-- end -->
    <!-- jQuery Library -->
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php");
    ?>
    
    <!-- Toast Notification -->
    <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        responsive: true
      });
    });
    // Toast Notification
    $(window).load(function() {
        
        setTimeout(function() {
            Materialize.toast('<span>Bienvenido</span>', 1500);
        }, 1500);
        setTimeout(function() {
            Materialize.toast('<span>En el boton izquierdo puede ver tus opciones en el sistema</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>No dudes en consultar al departamento de sistemas</span>', 3000);
        }, 15000);
    });
    </script>
</body>

</html>