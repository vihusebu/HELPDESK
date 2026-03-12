<?php
  $ruta="../../";
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."class/area.php");
  $area=new area;
  include_once($ruta."funciones/funciones.php");
  //session_start();
  extract($_GET); 
  $sumaTotal=0;
   $consultaNombres="SELECT idarea, count(idarea) as 'cantidadTotal'
                    FROM ticket
                    WHERE activo=1 and fecha BETWEEN '$fechaini' and '$fechafin'
                    GROUP BY idarea
                    ORDER BY cantidadTotal DESC
                   ";
       foreach($ticket->sql($consultaNombres) as $f1)
       {

        $sumaTotal=$sumaTotal+$f1['cantidadTotal'];        
       } 
?>
<!doctype html>
<html>

<head>
    <title>Áreas mas frecuentes</title>
    <script src="utils.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.min.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.min.js"></script>
</head>

<body>
    <div id="container" style="width: 40%;">
        <div style="text-align: center; font-size: 20px;"><p>SOLICITUD DE AREAS MAS FRECUENTES  TOP 5  <br> ENTRE FECHAS <?php echo $fechaini ?> a <?php echo $fechafin ?></p></div>
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
                       $consultaNombres="SELECT idarea, count(idarea) as 'cantidadTotal'
                                          FROM ticket
                                          WHERE activo=1 and fecha BETWEEN '$fechaini' and '$fechafin'
                                          GROUP BY idarea
                                          ORDER BY cantidadTotal DESC
                                            LIMIT 4";
                           foreach($ticket->sql($consultaNombres) as $f2)
                           {

                            $porcentaje=($f2['cantidadTotal']*100)/$sumaTotal;
                                echo round($porcentaje, 2);
                            //echo $porcentaje;
                            ?>
                               , 
                            <?php
                           } 
                       ?>
                ],
                backgroundColor: [
                     window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.red,
                    window.chartColors.blue
                ],
                label: 'Dataset 1'
            }],
            labels: [
                <?php 
                $contar=0;
                   $consultaN="SELECT idarea, count(idarea) as 'cantidadTotal'
                                FROM ticket
                                WHERE activo=1 and fecha BETWEEN '$fechaini' and '$fechafin'
                                GROUP BY idarea
                                ORDER BY cantidadTotal DESC
                                    LIMIT 5";
                       foreach($ticket->sql($consultaN) as $f3)
                       {
                        $are=$area->muestra($f3['idarea']);
                        $detalle=$are['nombre'];
                        $contar++;
                         $porcentaje=($f3['cantidadTotal']*100)/$sumaTotal;
                         //$detalle=$f3['detalle'];
                        //echo $detalle;
                         echo '"'.$contar.'.- '.$detalle.' '.round($porcentaje, 2).'%'.'"';
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
