<?php
  $ruta="../../";
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."funciones/funciones.php");
  //session_start();
  extract($_GET); 
  $sumaTotal=0;
   $consultaNombres="SELECT tic.idtipo, po.nombre as nombretipo, count(tic.idtipo) as 'cantidadTotal'
                        FROM ticket as tic
                        INNER JOIN tipo po on po.idtipo = tic.idtipo
                        WHERE tic.activo=1 and tic.fecha BETWEEN '$fechaini' and '$fechafin'                    
                        GROUP BY tic.idtipo
                         ORDER BY cantidadTotal DESC;
                   ";
       foreach($ticket->sql($consultaNombres) as $f1)
       {

        $sumaTotal=$sumaTotal+$f1['cantidadTotal'];        
       } 
?>
<!doctype html>
<html>

<head>
    <title>SOLICITUD DE TIPOS DE PROBLEMAS FRECUENTES</title>
    <script src="utils.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.min.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.min.js"></script>
</head>

<body>
    <div id="container" style="width: 40%;">
        <div style="text-align: center; font-size: 20px;"><p>SOLICITUD DE TIPOS DE PROBLEMAS FRECUENTES  TOP 10  <br> ENTRE FECHAS <?php echo $fechaini ?> a <?php echo $fechafin ?></p></div>
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
                       $consultaNombres="SELECT tic.idtipo, po.nombre as nombretipo, count(tic.idtipo) as 'cantidadTotal'
                        FROM ticket as tic
                        INNER JOIN tipo po on po.idtipo = tic.idtipo
                        WHERE tic.activo=1 and tic.fecha BETWEEN '$fechaini' and '$fechafin'                    
                        GROUP BY tic.idtipo
                         ORDER BY cantidadTotal DESC
                                        LIMIT 5";
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
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.red,
                    window.chartColors.grey,
                    window.chartColors.purple,
                    window.chartColors.blue,
                    window.chartColors.green,
                    window.chartColors.purple,
                    window.chartColors.red,
                    window.chartColors.blue
                ],
                label: 'Dataset 1'
            }],
            labels: [
                <?php 
                $contar=0;
                   $consultaN="SELECT tic.idtipo, po.nombre as nombretipo, count(tic.idtipo) as 'cantidadTotal'
                        FROM ticket as tic
                        INNER JOIN tipo po on po.idtipo = tic.idtipo
                        WHERE tic.activo=1 and tic.fecha BETWEEN '$fechaini' and '$fechafin'                    
                        GROUP BY tic.idtipo
                         ORDER BY cantidadTotal DESC
                                    LIMIT 5";
                       foreach($ticket->sql($consultaN) as $f3)
                       {
                        //$detalle=$tii['nombre'];
                        $contar++;
                         $porcentaje=($f3['cantidadTotal']*100)/$sumaTotal;
                         $detalle=$f3['nombretipo'];
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
