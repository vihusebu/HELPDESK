<?php
  $ruta="../../";
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."funciones/funciones.php");
  //session_start();
  extract($_GET); 
  $sumaTotal=0;
   $consultaNombres="SELECT tic.usuariocreacion, vus2.nombre as nombre, vus2.paterno as paterno, vus2.materno as materno, COUNT(tic.usuariocreacion) as 'cantidadVeces'
                        FROM ticket as tic
                        INNER JOIN vusuario2 vus2 on vus2.idvusuario2 = tic.usuariocreacion
                        WHERE tic.activo=1 and tic.fecha BETWEEN '$fechaini' and '$fechafin'
                        GROUP BY tic.usuariocreacion
                        ORDER BY cantidadVeces DESC
                   ";
       foreach($ticket->sql($consultaNombres) as $f1)
       {

        $sumaTotal=$sumaTotal+$f1['cantidadVeces'];        
       } 
?>
<!doctype html>
<html>

<head>
    <title>Operarios frecuentes</title>
    <script src="utils.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.min.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.min.js"></script>
</head>

<body>
    <div id="container" style="width: 40%;">
        <div style="text-align: center; font-size: 20px;"><p>OPERARIOS FRECUENTES DE SOLICITUD DE TICKETS TOP 10 <br>DE <?php echo $fechaini ?> a <?php echo $fechafin ?></p></div>
    </div>
    <div id="canvas-holder" style="width:40%">
        <canvas id="chart-area" />
    </div>
    <script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    //randomScalingFactor(),
                   <?php 
                      $consultaNombres="SELECT tic.usuariocreacion, vus2.nombre as nombre, vus2.paterno as paterno, vus2.materno as materno, COUNT(tic.usuariocreacion) as 'cantidadVeces'
                        FROM ticket as tic
                        INNER JOIN vusuario2 vus2 on vus2.idvusuario2 = tic.usuariocreacion
                        WHERE tic.activo=1 and tic.fecha BETWEEN '$fechaini' and '$fechafin'
                        GROUP BY tic.usuariocreacion
                        ORDER BY cantidadVeces DESC
                                        LIMIT 10";
                           foreach($ticket->sql($consultaNombres) as $f2)
                           {

                            $porcentaje=($f2['cantidadVeces']*100)/$sumaTotal;
                                echo round($porcentaje, 2);
                            //echo $porcentaje;
                            ?>
                               , 
                            <?php
                           } 
                       ?>
                ],
                backgroundColor: [
                    window.chartColors.green,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.blue,
                    window.chartColors.red,
                    window.chartColors.grey,
                    window.chartColors.purple,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.red

                ],
                label: 'Dataset 1'
            }],
            labels: [
                <?php 
                $contar=0;
                   $consultaN="SELECT tic.usuariocreacion, vus2.nombre as nombre, vus2.paterno as paterno, vus2.materno as materno, COUNT(tic.usuariocreacion) as 'cantidadVeces'
                        FROM ticket as tic
                        INNER JOIN vusuario2 vus2 on vus2.idvusuario2 = tic.usuariocreacion
                        WHERE tic.activo=1 and tic.fecha BETWEEN '$fechaini' and '$fechafin'
                        GROUP BY tic.usuariocreacion
                        ORDER BY cantidadVeces DESC
                                        LIMIT 10";
                       foreach($ticket->sql($consultaN) as $f3)
                       {
                        $contar++;
                         $nombre=$f3['nombre'].' '.$f3['paterno'].' '.$f3['materno'];
                         $porcentaje=($f3['cantidadVeces']*100)/$sumaTotal;
                         echo '"'.$contar.'.- '.$nombre.' '.round($porcentaje, 2).'%'.'"';
                        ?>
                           , 
                        <?php
                       } 
                   ?>
                
            ]
        },
        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx, config);
    };


    </script>
</body>

</html>
