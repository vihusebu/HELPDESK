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
 $anio=dcUrl($lblcode2); 
   

  //TOTAL COBROS
 $total=0;
  $consultatotal="SELECT *
              FROM ticket 
              WHERE YEAR(fecha) = $anio";            
  foreach($ticket->sql($consultatotal) as $f) 
  {
    $total++;
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
    <title>ANUAL</title>
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
    <div id="container" align="center" style="width: 100%;">
        <canvas id="canvas"></canvas> 
        <div style="text-align: center;"><p>PORCENTAJE SOLICITUDES DE TICKET ANUAL</p></div>
    </div>
    <script>
        var MONTHS = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            datasets: [{
                label: 'TICKETS(%)',
                backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
                borderColor: window.chartColors.green,
                borderWidth: 1,
                data: [
                       <?php                            
                            for ($i = 1; $i <= 12; $i++) 
                            {  $cantidadTotal=0; 
                                $consulta="SELECT *
                                           FROM ticket 
                                           WHERE YEAR(fecha) = $anio and MONTH(fecha) = $i";
                                foreach($ticket->sql($consulta) as $f)
                                {  
                                                                   
                                      
                                        $cantidadTotal++;
                                       
                                    
                                }
                                  $porcentaje=($cantidadTotal*100)/$total;
                                echo round($porcentaje, 2);
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
                        text: 'REPORTE ESTADISTICO DE TICKET ANUAL DE <?php echo $anio ?>'
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
