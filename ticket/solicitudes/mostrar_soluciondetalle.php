<?php
session_start();
$ruta="../../";
include_once($ruta."class/ticket.php");
$ticket=new ticket;
include_once($ruta."class/solucion.php");
$solucion=new solucion;
include_once($ruta."class/soluciondetalle.php");
$soluciondetalle=new soluciondetalle;

include_once($ruta."class/vadmejecutivo.php");
$vadmejecutivo=new vadmejecutivo;
extract($_POST);
$tic=$ticket->muestra($idticket);
$sol=$solucion->muestra($idsolucion);
$vadmeje=$vadmejecutivo->muestra($sol['idadmejecutivo']);

switch ($tic['estado']) 
 {
   case '1':
      $estado='<p style="color:orange;">PENDIENTE</p>';
     break;
   
   case '2':
      $estado='<p style="color:blue;">EN PROCESO</p>';
     break;
   case '3':
    $estado='<p style="color:green;">EJECUTADO</p>';
   break;
   case '4':
      $estado='<p style="color:red;">CANCELADO</p>';
     break;
  }

  echo "
   <div class='row' style='background: #7AAD4E; text-align: center; color:white; font-size: 20px; border-radius: 5px;'>Problema: <b>".$tic['problema']."</div>
   <div class='row' style='background: #7AAD4E; text-align: center; color:white; font-size: 20px; border-radius: 5px;'> Problema Descripción:<b>".$tic['descripcion']."</b></div>
   <div class='row' style='background: #7AAD4E; text-align: center; color:white; font-size: 20px; border-radius: 5px;'>Fecha solicitud: <b>".$tic['fecha']."</b></div>
   <div class='row' style='background: #7AAD4E; text-align: center; color:white; font-size: 20px; border-radius: 5px;'>Fecha Inicio: <b>".$sol['fecha']."</b> Fecha Finaliza:<b>".$sol['fechafin']."</b></div>
    <div class='row' style='background: #7AAD4E; text-align: center; color:white; font-size: 20px; border-radius: 5px;'>Estado:<b>".$estado."</b> Operador asignado: <b>".$vadmeje['nombre'].' '.$vadmeje['paterno']."</b> </div>
  <fieldset>

        <table id='examplesoldet' style='font-size:14px;' class='display' cellspacing='0' width='100%'>
           <thead>
              <tr style='text-align:right;'> 
                <th>Fecha registro</th>
                <th>Hora registro</th>
                <th>Avance detalle</th>
              </tr>
           </thead>
        <tbody>
      ";      
      $contar=0;
    
       foreach($soluciondetalle->mostrarTodo("idsolucion=".$idsolucion." and estado=1") as $contin)
      {
        
         $contar++; 
        echo "
              <tr>
                
                <td>".$contin['fecha']."</td>
                <td>".$contin['horacreacion']."</td>
                <td>".$contin['avance']."</td>
              </tr>
            ";
       }
 echo "  </tbody>
        <tfoot>
          <tr style='align=center'>
            <th style='text-align:center'></th>
            <th style='text-align:left'></th>
            <th style='text-align:left'></th>
           </tr>
        </tfoot>
        </table>      
       </fieldset>                         
        "; 
?> 

 <script type="text/javascript">
    $(document).ready(function() {
      
       $('#examplesoldet').DataTable( {
        dom: 'Bfrtip',
        "order": [[ 0, "DESC" ]],
        buttons: [
           // 'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });

    });

    </script>  
     

