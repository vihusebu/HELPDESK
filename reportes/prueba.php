<?php
  $ruta="../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/tipo.php");
  $tipo=new tipo;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."funciones/funciones.php");
  session_start();  

   extract($_GET);

 // $valor=dcUrl($lblcode);

   $fechaTicket='2025-03-28';
   $fechaSolucion='2025-03-29';
   $fechaTicket='09:03:50';
   $horaSolucion='09:03:50';
echo 'opcion 1<br>';
$fechaInicio = new DateTime('2024-01-28');
// Fecha de finalización (puede ser la fecha actual)
$fechaFin = new DateTime('2024-03-29');
// Calcular la diferencia entre las fechas
$diferencia = $fechaInicio->diff($fechaFin);
// Acceder a los componentes de tiempo deseados
echo "Diferencia de días: " . $diferencia->days . " días<br>";
echo "Diferencia de meses: " . $diferencia->m . " meses<br>";
echo "Diferencia de años: " . $diferencia->y . " años<br>";
echo "Diferencia total en días: " . $diferencia->format('%R%a') . " días<br>";

echo 'opcion 2<br>';
$date1 = new DateTime("2015-02-14 10:00:00");
$date2 = new DateTime("2015-02-15 10:00:00");
$diff = $date1->diff($date2);
// 38 minutes to go [number is variable]
echo ( ($diff->days * 24 ) * 60 ) + ( $diff->i ) . ' minutes';
// passed means if its negative and to go means if its positive
//echo ($diff->invert == 1 ) ? ' passed ' : ' to go ';


echo '<br>opcion 3<br>';
$date1 = new DateTime("2014-02-09");
$date2 = new DateTime("2015-03-11");
$diff = $date1->diff($date2);
// this will output 4 days                           
echo $diff->days .' days ';

// if you want to check for minus
echo ($diff->invert == 1) ? ' - ' . $diff->days .' days '  : $diff->days .' days <br>';

//get_format($diff);




function get_format($df) {

    $str = '';
    $str .= ($df->invert == 1) ? ' - ' : '';
    if ($df->y > 0) {
        // years
        $str .= ($df->y > 1) ? $df->y . ' Año ' : $df->y . ' Año ';
    } if ($df->m > 0) {
        // month
        $str .= ($df->m > 1) ? $df->m . ' Mes ' : $df->m . ' Mes ';
    } if ($df->d > 0) {
        // days
        $str .= ($df->d > 1) ? $df->d . ' Dia ' : $df->d . ' Dia ';
    } if ($df->h > 0) {
        // hours
        $str .= ($df->h > 1) ? $df->h . ' Horas ' : $df->h . ' Horas ';
    } if ($df->i > 0) {
        // minutes
        $str .= ($df->i > 1) ? $df->i . ' Minutos ' : $df->i . ' Minutos ';
    } if ($df->s > 0) {
        // seconds
        $str .= ($df->s > 1) ? $df->s . ' Segundos ' : $df->s . ' Segundos ';
    }

    echo $str;
}
echo 'opcion 4<br>';
$date1 = new DateTime("2014-02-09 10:02:10");
$date2 = new DateTime("2015-03-11 12:05:11");
$diff = $date1->diff($date2);
get_format($diff);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="NUEVO TIPO";
      include_once($ruta."includes/head_basico.php");
    ?>
</head>
<body>
    <?php
      include_once($ruta."head.php");
    ?>
    <div id="main">
      <div class="wrapper">
        <?php
          $idmenu=1041;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row " >
                <div class="col s12 m12 l2">&nbsp;</div>
              <div class="col s12 m12 l8" style="background: white; text-align: center; color:#024873; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <?php echo $hd_titulo; ?>
              </div>
              <div class="col s12 m12 l2">&nbsp;</div>
              
                    
              </div>
              
            </div>
          </div>
           
           <div class="row section">
        <div class="col s12 m12 l2">&nbsp;</div>
        <div class="col s12 m12 l8">               
           <div class="col s12 m12 l12">
            <div id="persona" class="col s12 m12 l12  "><!-- blue lighten-4 -->
                 <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">
                <div class="col s12 m12 l12">
                    <div class="formcontent">  
                      <div class="row" style="font-size: 18px; border-radius: 5px; border:#CBCBCB 1px solid;">
                       
                        <div class="input-field col s12 m12 l12">
                          <input id="idnombre1" name="idnombre1" type="text" class="validate">
                          <label for="idnombre1">Nombre</label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                          <input id="idnombre" name="idnombre" type="text" class="validate">
                          <label for="idnombre">Nombre</label>
                        </div>

                      </div>
                </div>
              </form>
            </div>           
          </div>

        </div>
        <div class="col s12 m12 l2">&nbsp;</div>


            </div> 
          <?php
           // include_once("../footer.php");
          ?>
        </section>
      </div>
    </div>
    <div id="idresultado"></div>
    <?php
      include_once($ruta."includes/script_basico.php");
    ?>
    <script type="text/javascript">
      $("#btnSave").click(function(){
        $('#btnSave').attr("disabled",true);
        if (validar()) 
        {          
                swal({
                  title: "¿Esta seguro?",
                  text: "Se registrara nuevo",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "Registrar",
                   closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                  var str = $( "#idform" ).serialize();
                  $.ajax({
                    url: "guardar.php",
                    type: "POST",
                    data: str,
                    success: function(resp){
                      setTimeout(function(){     
                          console.log(resp);
                          $('#idresultado').html(resp);   
                        }, 1000);
                    }
                  }); 
                });
        }else{
          swal("ERROR","Complete con datos","error");
        }
      });
function validar(){
        retorno=true;
        nombre=$('#idnombre').val();
        if(nombre==""){
          retorno=false;
        }
        return retorno;
      }
    function limpiar()
      {
          document.getElementById("idform").reset();
      }
    </script>
</body>

</html>