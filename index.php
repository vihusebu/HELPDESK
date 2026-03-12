<?php
  $ruta="";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="Ingresar al Sistema";
      include_once("includes/head_basico.php");
    ?>
    <link href="<?php echo $ruta ?>recursos/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo $ruta ?>recursos/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo $ruta ?>recursos/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body>
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
    <div id="login-page" class="row" style="background: #009ad8;">
    <div class="col s12 z-depth-4 card-panel"  style="background: #024873;">
        <div class="row">
          <div class="input-field col s12 center" style="color:white;"><br>
            <img style="width: 250px;" src="<?php echo $ruta ?>recursos/images/logo.png" alt="">
            <p class="center login-form-text">SISTEMA HELP DESk<br> PARA ASIGNACIÓN DE TICKETS DE ATENCIÓN</p>
            <?php
              if (isset($_SESSION["faltaSistema"])) {
                if ($_SESSION["faltaSistema"]>=4) {
                    header("Location: penalizado.php");
                }
                ?>
                  <div id="card-alert" class="card orange lighten-5">
                      <div class="card-content orange-text">
                        <p>FALTA AL SISTEMA : No continue realizando faltas al sistema. 
                          Caso contrario se suspendera su cuenta y se dara aviso a las autoridades Correspondientes.</p>
                      </div>
                      <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                <?php
              }
            ?>
          </div>
        </div>
        <form id="idform" action="return false" onsubmit="return false" method="POST" >
        <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-social-person-outline prefix" style="color:white;"></i>
              <input id="username" type="text" style="background-color: white;">
              <label for="username" class="center-align">Ingrese su Usuario</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="mdi-action-lock-outline prefix" style="color:white;"></i>
              <input id="password" type="password"  style="background-color: white;">
              <label for="password">Ingrese su contraseña</label>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="input-field col s12">
              <div id="msgLoginREsp"></div>
              <input type="submit" id="idLog" name="idLog" class="btn waves-effect waves-light cyan darken-1 col s12" style="background-color: #116434"  value="INGRESAR AL SISTEMA">
            </div>

          </div>
        </form>
    </div>
  </div>
    <script type="text/javascript" src="<?php echo $ruta ?>recursos/js/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $ruta ?>recursos/js/materialize.js"></script>
    <script type="text/javascript" src="<?php echo $ruta ?>recursos/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>    
    <script type="text/javascript" src="<?php echo $ruta ?>recursos/js/plugins.js"></script>
    <script type="text/javascript" src="<?php echo $ruta ?>recursos/js/custom-script.js"></script>
    <script type="text/javascript" src="<?php echo $ruta ?>recursos/js/plugins/prism/prism.js"></script>
    <script src="<?php echo $ruta; ?>recursos/custom/session.js"></script>
    <script type="text/javascript">
      $("#username").focus();
    </script>

</body>

</html>