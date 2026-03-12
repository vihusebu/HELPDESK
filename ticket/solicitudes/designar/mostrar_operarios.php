<?php
session_start();
$ruta="../../../";
include_once($ruta."class/vadmejecutivo.php");
$vadmejecutivo=new vadmejecutivo;
extract($_POST);
  echo "

    <div class='row' style='background: #7AAD4E; text-align: center; color:white; font-size: 20px; border-radius: 5px;'>
    <b>OPERARIOS REGISTRADOS EN EL SISTEMA</b> 
    </div>
  <fieldset>

        <table id='examplesoldet' style='font-size:14px;' class='display' cellspacing='0' width='100%'>
           <thead>
              <tr> 
                <th>Operador</th>
                <th>Carnet</th>
                <th>Opciones</th>
              </tr>
           </thead>
        <tbody>
      ";      
      $contar=0;
    
       foreach($vadmejecutivo->mostrarTodo("idtipo=".$idtipooperario." and estado=1") as $ope)
      {
        $idadmejecutivoSel=$ope['idvadmejecutivo'];
         $contar++; 
        echo "
              <tr>
                
                <td>".$ope['nombre'].' '.$ope['paterno'].' ' .$ope['materno']."</td>
                <td>".$ope['carnet'].' '.$ope['expedido']."</td>
                <td><button class='btn waves-effect waves-light orange' onclick='selecionadooper(".$idadmejecutivoSel.");'> <i class='fa fa-arrow-circle-right'></i> Seleccionar </button></td>
                
              </tr>
            ";
       }
 echo "  </tbody>
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th></th>
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
     

