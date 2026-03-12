<?php
session_start();
include_once("../../../class/inventario_almacen.php");
$inventario_almacen=new inventario_almacen;
include_once("../../../class/proveedor.php");
$proveedor=new proveedor;
include_once("../../../class/vinventario.php");
$vinventario=new vinventario;
include_once("../../../class/almacen.php");
$almacen=new almacen;
include_once("../../../funciones/funciones.php");
extract($_POST);
$alm=$almacen->muestra($idalmacen);
$it=$vinventario->muestra($idinventario);
//$lblcode=ecUrl($idproyecto); 
  echo "
  <fieldset>
     <legend class='titulo'>Almacen: ".$alm['nombre']."</legend>
     <div style='text-align:center'><b>Item: </b><b style='color: #FF7140; font-weight: bold; font-size: 18px;'>".$it['item']."</b></div>
             <table  id='exampleLOT' style='font-size:14px;' class='display' cellspacing='0' width='100%'>
           <thead>
          <tr style='text-align:right;'>                                       
            <th>Lote</th>
            <th style='text-align:center;'>Fecha Ingreso</th>
            <th style=''>Proveedor</th>
            <th style='text-align:center;'>Cantidad</th>
          </tr>
        </thead>
        <tbody>
      ";
        $total=0;

       foreach($inventario_almacen->mostrarTodo("idalmacen=".$idalmacen." and idinventario=".$idinventario) as $f)
      {
         $lblcode=ecUrl($f['idinventario_almacen']);  
         $pro=$proveedor->muestra($f['idproveedor']); 

        echo "
              <tr>
                <td style=''>".$f['lote']."</td>
                <td style='text-align:center;'>".$f['fechaingreso']."</td>
                <td style=''>".$pro['empresa']."</td>
                <td style='text-align:center;'>".$f['existencias']."</td>
                 
              </tr>
            ";
      }

 echo "  </tbody>
        <tfoot>
          <tr style='align=center'>
            <th></th>
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
      
       $('#exampleLOT').DataTable( {
        dom: 'Bfrtip',
        "order": [[ 0, "DESC" ]],
        buttons: [
           // 'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });

    });

    </script>  
     

