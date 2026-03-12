<?php
session_start();
$ruta="../";
include_once($ruta."class/ticket.php");
$ticket=new ticket;
include_once($ruta."class/vadmejecutivo.php");
$vadmejecutivo=new vadmejecutivo;
include_once($ruta."class/comprobacion.php");
$comprobacion=new comprobacion;
extract($_POST);
$tic=$ticket->muestra($idticket);
//$vadmeje=$vadmejecutivo->muestra($tic['idadmejecutivo']);

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
       case '5':
    $estado='<p style="color:purple;">DESIGNADO</p>';
   break;
   case '6':
    $estado='<p style="color:green;">APROBADO</p>';
   break;
   case '7':
    $estado='<p style="color:red;">NO APROBADO</p>';
   break;
  }

  echo "
   <div class='row' style=' text-align: center; color:#7AAD4E; font-size: 20px; border-radius: 5px;'>Problema: <b>".$tic['problema']."</div>
   <div class='row' style=' text-align: center; color:#7AAD4E; font-size: 20px; border-radius: 5px;'> Problema Descripción:<b>".$tic['descripcion']."</b></div>
   <div class='row' style=' text-align: center; color:#7AAD4E; font-size: 20px; border-radius: 5px;'>Fecha solicitud: <b>".$tic['problema']."</b></div>
   
    <div class='row' style=' text-align: center; color:#7AAD4E; font-size: 20px; border-radius: 5px;'>Estado:<b>".$estado."</b> </div>
  <fieldset>

        <table id='examplecompro' class='display' cellspacing='0' width='100%'>
           <thead>
              <tr style='text-align:right;'> 
                <th>Fecha</th>
                <th>Motivo de la desición</th>
                <th>Encargado de Aprobar</th>
              </tr>
           </thead>
        <tbody>
      ";      
      $contar=0;
    
       foreach($comprobacion->mostrarTodo("idticket=".$idticket) as $compro)
      {
        $vadmeje=$vadmejecutivo->muestra($compro['idadmejecutivo']);
         $contar++; 
        echo "
              <tr>
                <td>".$compro['fecha']."</td>
                <td>".$compro['descripcion']."</td>
                <td>".$vadmeje['nombre'].' '.$vadmeje['paterno'].' '.$vadmeje['materno']."</td>
              </tr>
            ";
       }
 echo "  </tbody>
        <tfoot>
          <tr style='align=center'>
            <th style='text-align:left'></th>
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
      
       $('#examplecompro').DataTable( {
        dom: 'Bfrtip',
        "order": [[ 0, "DESC" ]],
        buttons: [
           // 'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });

    });

    </script>  
     

