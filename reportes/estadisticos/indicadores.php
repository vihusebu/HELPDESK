<?php
  $ruta="../../";
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."class/area.php");
  $area=new area;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."funciones/funciones.php");
  //session_start();
  extract($_GET);

 // $lblcode=ecUrl($idus);  
  //$mesAnteriorInicio= date("Y-m-01",strtotime($fecha_actual."- 1 month"));
  
 //$anio=dcUrl($lblcode2); 
  $anio=date('Y');
  $tipo=1;
   

  //01 VENTA ANUAL
  $total=0;
  $consultatotal="SELECT *
              FROM ticket 
              WHERE YEAR(fecha) = $anio";            
  foreach($ticket->sql($consultatotal) as $f) 
  {
    $total++;
  }   
  //02  MONTO EN VENTAS MENSUALES
  $fechaini= date("Y-01-01");
  $fechafin= date("Y-12-31");
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


  //03 PRODUCTOS MAS VENDIDOS $sumaTotal3
  $sumaTotal3=0;
   $consultaNombres="SELECT idarea, count(idarea) as 'cantidadTotal'
                    FROM ticket
                    WHERE activo=1 and fecha BETWEEN '$fechaini' and '$fechafin'
                    GROUP BY idarea
                    ORDER BY cantidadTotal DESC
                   ";
       foreach($ticket->sql($consultaNombres) as $f1)
       {

        $sumaTotal3=$sumaTotal3+$f1['cantidadTotal'];        
       }          
   
   //04 CLIENTES FRECUENTES
 $sumaTotal4=0;
   $consultaNombres="SELECT tic.usuariocreacion, vus2.nombre as nombre, vus2.paterno as paterno, vus2.materno as materno, COUNT(tic.usuariocreacion) as 'cantidadVeces'
                        FROM ticket as tic
                        INNER JOIN vusuario2 vus2 on vus2.idvusuario2 = tic.usuariocreacion
                        WHERE tic.activo=1 and tic.fecha BETWEEN '$fechaini' and '$fechafin'
                        GROUP BY tic.usuariocreacion
                        ORDER BY cantidadVeces DESC
                   ";
       foreach($ticket->sql($consultaNombres) as $f1)
       {

        $sumaTotal4=$sumaTotal4+$f1['cantidadVeces'];        
       } 
?>
<!doctype html>
<html>

<head>
    <title>Indicadores anual</title>
    <script src="utils.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.bundle.min.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.js"></script>
    <script src="<?php echo $ruta ?>recursos/graphics/js/2.6.0/Chart.min.js"></script>
    <?php
    include_once($ruta."includes/head_basico.php");
    include_once($ruta."includes/script_basico.php");
     ?>

    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
    <!-- Mainly scripts -->
</head>

<body>
    <div class="container">
    <div class="row">
         <div class="col s12 m12 l6" id="container" align="center">
        <canvas id="canvas1"></canvas> 
        <!--<div style="text-align: center;"><p>PORCENTAJE DE VENTA DE PRODUCTOS ANUAL</p></div>-->
        </div>
        <div class="col s12 m12 l6" id="container" align="center">
            <canvas id="canvas11"></canvas> 
           <!-- <div style="text-align: center;"><p>PORCENTAJE DE VENTA DE PRODUCTOS ANUAL</p></div>-->
        </div>

         <div class="col s12 m12 l6" id="container" align="center">
        <canvas id="canvas2"></canvas> 
        <!--<div style="text-align: center;"><p>SUMATORIAL TOTAL DE VENTAS Bs. <?php echo number_format($sumatotal, 2, '.', '') ?></p></div>
        </div>-->
            </div>
        <div class="col s12 m12 l6" id="container" align="center">
            <canvas id="canvas22"></canvas>
        </div>
        <div class="col s12 m12 l6" id="canvas-holder">
            <div id="container">
                <div style="text-align: center; font-size: 20px;"><p>SOLICITUD DE AREAS MAS FRECUENTES  TOP 5 <br>DE <?php echo $anio ?></p></div>
            </div>
            <canvas id="chart-area" />
        </div>
        <div class="col s12 m12 l6" id="canvas-holder4">
            <div id="container">
                <div style="text-align: center; font-size: 20px;"><p>OPERARIOS FRECUENTES DE SOLICITUD DE TICKETS TOP 10 <br>DE <?php echo $anio ?></p></div>
            </div>
            <canvas id="chart-area4" />
        </div>
    </div>
    
    <script>
       var MONTHS = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            datasets: [{
                label: 'TICKETS(%)',
                backgroundColor: color(window.chartColors.orange).alpha(0.5).rgbString(),
                borderColor: window.chartColors.orange,
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
            var ctx1 = document.getElementById("canvas1").getContext("2d");
            var ctx11 = document.getElementById("canvas11").getContext("2d");
            window.myBar = new Chart(ctx1, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'REPORTE ESTADISTICO PORCENTAJE SOLICITUDES DE TICKET ANUAL DE <?php echo $anio ?>'
                    }
                }
            });
             window.myBar = new Chart(ctx11, {
                type: 'line',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'REPORTE ESTADISTICO PORCENTAJE SOLICITUDES DE TICKET ANUAL DE <?php echo $anio ?>'
                    }
                }
            });
             //PARTE DE 2--------------------------------------------------------------
               var ctx2 = document.getElementById("canvas2").getContext("2d");
               var ctx22 = document.getElementById("canvas22").getContext("2d");
                window.myBar = new Chart(ctx2, {
                    type: 'bar',
                    data: barChartData2,
                    options: {
                        responsive: true,
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'ESTADISTICO DE SOLICITUDES DE TICKET ANUAL TOTAL: <?php echo $sumatotal ?>'
                        }
                    }
                });
                 window.myBar = new Chart(ctx22, {
                    type: 'line',
                    data: barChartData2,
                    options: {
                        responsive: true,
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'ESTADISTICO DE SOLICITUDES DE TICKET ANUAL TOTAL: <?php echo $sumatotal ?>'
                        }
                    }
                });
                //PARTE DE 2 FINNNN--------------------------------------------------------------
                 //PARTE DE 3 --------------------------------------------------------------
                 var ctx3 = document.getElementById("chart-area").getContext("2d");
                  window.myPie = new Chart(ctx3, config);
                   //PARTE DE 3 FINNNN--------------------------------------------------------------

                //PARTE DE 3 --------------------------------------------------------------
                 var ctx4 = document.getElementById("chart-area4").getContext("2d");
                   window.myPie = new Chart(ctx4, config4);
                   //PARTE DE 3 FINNNN--------------------------------------------------------------
                  
        };

  //02 -------------------------------------
            var MONTHS = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        var color = Chart.helpers.color;
        var barChartData2 = {
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
                backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
                borderColor: window.chartColors.green,
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

      
    //03-----------------------------------------------------    
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
                                        LIMIT 5";
                           foreach($ticket->sql($consultaNombres) as $f2)
                           {

                            $porcentaje=($f2['cantidadTotal']*100)/$sumaTotal3;
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
                         $porcentaje=($f3['cantidadTotal']*100)/$sumaTotal3;
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

   //04-----------------------------------------------------
    var config4 = {
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

                            $porcentaje=($f2['cantidadVeces']*100)/$sumaTotal4;
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
                         $porcentaje=($f3['cantidadVeces']*100)/$sumaTotal4;
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
 
    </script>
</body>

</html>
