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
   

  //TOTAL COBROS
 $sumatotal=0;
 $cantidadTotal=0;
  $consultatotal="SELECT fechacontar, count(fechacontar) as cantidadfechas, anio, mes, dia
                                    from(SELECT fecha as fechacontar, CONCAT(YEAR(fechacreacion), '-', MONTH(fechacreacion)) as Fecha1, YEAR(fechacreacion) as anio, MONTH(fechacreacion) as mes, DAY(fechacreacion) as dia
FROM ticket
 where fechacreacion BETWEEN '$fechaini' and '$fechafin' ORDER BY fechacreacion ASC) consultas
                                    group by fechacontar ORDER BY anio ASC, mes ASC";  

  foreach($ticket->sql($consultatotal) as $f3) 
  {
    $sumatotal=$sumatotal+$f3['cantidadfechas'];
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
        <div style="text-align: center;"><p>CANTIDAD TOTAL DE SOLICITUDES <?php echo number_format($sumatotal, 2, '.', '') ?></p></div>
    </div>
    <script>
        var MONTHS = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: [
                      <?php 
                       $consultaNombres="SELECT fechacontar, count(fechacontar) as cantidadfechas, anio, mes, dia
                                    from(SELECT fecha as fechacontar, CONCAT(YEAR(fechacreacion), '-', MONTH(fechacreacion)) as Fecha1, YEAR(fechacreacion) as anio, MONTH(fechacreacion) as mes, DAY(fechacreacion) as dia
                                            FROM ticket
                                             where fechacreacion BETWEEN '$fechaini' and '$fechafin' ORDER BY fechacreacion ASC) consultas
                                    group by fechacontar ORDER BY anio ASC, mes ASC";
                           foreach($ticket->sql($consultaNombres) as $f2)
                           {

                            $mesTexto=mes($f2['mes']);
                            $textoCompleto= "'".$f2['dia'].' '.$mesTexto.' '.$f2['anio']."'";
                            echo $textoCompleto;
                            ?>
                               , 
                            <?php
                           } 
                       ?>
                    ],
            datasets: [{
                label: 'CANTIDAD TICKETS DIARIOS',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    <?php 
                        $consultameses="SELECT fechacontar, count(fechacontar) as cantidadfechas, anio, mes, dia
                                    from(SELECT fecha as fechacontar, CONCAT(YEAR(fechacreacion), '-', MONTH(fechacreacion)) as Fecha1, YEAR(fechacreacion) as anio, MONTH(fechacreacion) as mes, DAY(fechacreacion) as dia
                                        FROM ticket
                                         where fechacreacion BETWEEN '$fechaini' and '$fechafin' ORDER BY fechacreacion ASC) consultas
                                    group by fechacontar ORDER BY anio ASC, mes ASC, dia ASC";
                           foreach($ticket->sql($consultameses) as $f)
                            {                                            
                             
                            echo number_format($f['cantidadfechas'], 2, '.', '') ;
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
                        text: 'ESTADISTICO DE SOLICITUD DE TIKETS EN LA FECHAS <?php echo $fechaini ?> a <?php echo $fechafin ?>'
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
