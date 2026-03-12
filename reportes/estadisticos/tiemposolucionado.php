<?php
  $ruta="../../";
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."funciones/funciones.php");
  //session_start();
  extract($_GET);

 // $lblcode=ecUrl($idus);  
  //$mesAnteriorInicio= date("Y-m-01",strtotime($fecha_actual."- 1 month"));
  $mesInicio= date("Y-m-01");
  $mesFin= date("Y-m-d");
 //$anio=dcUrl($lblcode2); 
   
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
    return $str;
  // echo $str;
}


  //TOTAL COBROS
 $sumatotal=0;
 $cantidadTotal=0;
  $consultatotal="SELECT tic.*, sol.fecha as fechasolucion, sol.horacreacion as horasolucion, sol.fechafin as fechafinsol, sol.horafin as horafinsol
                    FROM ticket as tic
                    INNER JOIN solucion sol on sol.idticket = tic.idticket
                    WHERE tic.activo=1 and tic.estado=3 and sol.fecha BETWEEN '$fechaini' and '$fechafin'
                    ORDER BY sol.fecha DESC"; //estado=3 ejecutado (solucionado) 

  foreach($ticket->sql($consultatotal) as $f3) 
  {
    //$date1 = new DateTime("2015-02-14 10:00:00");
    //$date2 = new DateTime("2015-02-15 10:00:00");
    $date1 = new DateTime($f3['fechasolucion'].' '.$f3['horasolucion']);
    $date2 = new DateTime($f3['fechafinsol'].' '.$f3['horafinsol']);
    $diff = $date1->diff($date2);
    // 38 minutes to go [number is variable]
    $minutototal=( ($diff->days * 24 ) * 60 ) + ( $diff->i );
    // passed means if its negative and to go means if its positive
    //echo ($diff->invert == 1 ) ? ' passed ' : ' to go ';


        $sumatotal=$sumatotal+$minutototal;//$f3['cantidadfechas'];
        $cantidadTotal++;
      }           
  switch ($tipo) {
  case '1':
     $tipograf='bar';
      break;
  
  case '2':
     $tipograf='line';
      break;
 }   
      
?>
<!doctype html>
<html>

<head>
     <?php
      include_once($ruta."includes/head_basico.php");
      include_once($ruta."includes/script_basico.php");
    ?>
    <title>MESES</title>
    <script src="utils.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.min.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.min.js"></script>

    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
</head>

<body>
    <div id="container" style="width: 100%;">
        <canvas id="canvas"></canvas> 
        <div style="text-align: center;"><p>TOTAL MINUTOS EN LA SOLUCIÓN DE PROBLEMA DE TICKET <?php echo $sumatotal.' '. $respue; ?></p></div>
    </div>
    <script>
        var MONTHS = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: [
                      <?php 
                       $consultaNombres="SELECT tic.*, sol.fecha as fechasolucion, sol.horacreacion as horasolucion, sol.fechafin as fechafinsol, sol.horafin as horafinsol
                                        FROM ticket as tic
                                        INNER JOIN solucion sol on sol.idticket = tic.idticket
                                        WHERE tic.activo=1 and tic.estado=3 and sol.fecha BETWEEN '$fechaini' and '$fechafin'
                                        ORDER BY sol.fecha DESC";
                           foreach($ticket->sql($consultaNombres) as $f2)
                           {
                            $date1 = new DateTime($f2['fechasolucion'].' '.$f2['horasolucion']);
                            $date2 = new DateTime($f2['fechafinsol'].' '.$f2['horafinsol']);
                            $diff = $date1->diff($date2);                                      
                            //get_format($diff,$respue);
                            $textoCompleto= "'".get_format($diff)."'";
                            echo $textoCompleto;
                            ?>
                               , 
                            <?php
                           } 
                       ?>
                    ],
            datasets: [{
                label: 'Total en Minutos',
                backgroundColor: color(window.chartColors.purple).alpha(0.5).rgbString(),
                borderColor: window.chartColors.purple,
                borderWidth: 1,
                data: [
                    <?php 
                        $consultameses="SELECT tic.*, sol.fecha as fechasolucion, sol.horacreacion as horasolucion, sol.fechafin as fechafinsol, sol.horafin as horafinsol
                                        FROM ticket as tic
                                        INNER JOIN solucion sol on sol.idticket = tic.idticket
                                        WHERE tic.activo=1 and tic.estado=3 and sol.fecha BETWEEN '$fechaini' and '$fechafin'
                                        ORDER BY sol.fecha DESC";
                           foreach($ticket->sql($consultameses) as $f)
                            {                                            
                                $date1 = new DateTime($f['fechasolucion'].' '.$f['horasolucion']);
                                $date2 = new DateTime($f['fechafinsol'].' '.$f['horafinsol']);
                                $diff = $date1->diff($date2);
                                // 38 minutes to go [number is variable]
                                $minutototal=( ($diff->days * 24 ) * 60 ) + ( $diff->i );
                                echo $minutototal;//number_format($f['cantidadfechas'], 2, '.', '') ;
                            ?>
                               , 
                            <?php 
                            }                                
                            ?>
                ]
            }, ]

        };

         window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: '<?php echo $tipograf ?>',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'TIEMPO DE SOLUCIÓN DE PROBLEMAS DE SOLICITUD DE TICKET ENTRE LAS FECHAS <?php echo $fechaini ?> a <?php echo $fechafin ?>'
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });
    </script>
</body>

</html>
