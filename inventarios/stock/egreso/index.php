<?php
  $ruta="../../../"; 
  include_once($ruta."class/vinventario.php");
  $vinventario=new vinventario;
  include_once($ruta."class/marca.php");
  $marca=new marca;
  include_once($ruta."class/almacen.php");
  $almacen=new almacen;
  include_once($ruta."class/inventario_almacen.php");
  $inventario_almacen=new inventario_almacen;
  include_once($ruta."class/proveedor.php");
  $proveedor=new proveedor;
  include_once($ruta."funciones/funciones.php");
  session_start(); 
  extract($_GET);


  $valor=dcUrl($lblcode);
  $idalmacen=dcUrl($lblcode2);

  $dinsumo=$vinventario->muestra($valor);  
   $dmarca=$marca->muestra($dinsumo['idmarca']); 

  $valor2=dcUrl($lblcode2);
  $dalmacen=$almacen->muestra($valor2); 

  $idusuario=$_SESSION["codusuario"];
  $adress=$_SERVER['REQUEST_URI'] ;
  $_SESSION["codempresa"]=$valor;

  $datoIA=$inventario_almacen->mostrarTodo("idalmacen=".$idalmacen." and idinventario=".$valor);
    $datoIA=array_shift($datoIA);
//echo $idalmacen;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="EGRESO";
      include_once($ruta."includes/head_basico.php");
      include_once($ruta."includes/head_tabla.php"); 
    ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
  <style type="text/css">   

.bordeado{
  border: 1px solid #d8d8d8; 
  border-radius:5px;
}

</style> 
</head>
<body>
    <?php
      include_once($ruta."head.php");
    ?>
    <div id="main">
      <div class="wrapper">
        <?php
          $idmenu=1121;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12" align="right">
                  <a href="../?lblcode=<?php echo $lblcode2 ?>" class="btn waves-effect waves-light red"><i class="fa fa-reply"></i> Atras</a>    
                </div>
              </div>   
            </div>
          </div>
          <div class="container">
              <div class="row">
                <div class="col s12 m12">
                 <!-- <h4 class="header">Actualizar Curso</h4> -->
                  <div class="titulo">Datos de Item</div>
                  
                  <form class="col s12" id="idform" name="idform" action="return false" onsubmit="return false" method="POST">
                    <input type="hidden" name="idinventario" id="idinventario" value="<?php echo $valor; ?>">
                    <input type="hidden" name="idalmacen" id="idalmacen" value="<?php echo $idalmacen; ?>">
                     <div class="row">
                        <div class="row">
                           <div class="card ">
                      <div class="card-content "> 
                        <div class="col s2 m2 l2 orange-text">ALMACÉN: </div>
                        <div class="col s4 m4 l4"><?php echo $dalmacen['nombre'] ?> </div>
                        <div class="col s2 m2 l2 orange-text">NOMBRE: </div>
                        <div class="col s4 m4 l4"><?php echo $dinsumo['item'] ?> </div>

                        <div class="col s2 m2 l2 orange-text">MARCA: </div>
                        <div class="col s4 m4 l4"><?php echo $dinsumo['marca'] ?> </div>
                        
                      
                      </div>
                       
                    </div>
                        </div>
                      </div>
                </div>
                 <div class="col s12 m12">
                   <fieldset class="formulario">
                   <legend><div style="color:#D22620;"><i class="fa fa-minus-square"></i> <strong><?php echo $hd_titulo; ?></strong> </div></legend> 
                <table id="example" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Lote</th>
                      <th>Fecha Ingreso</th>
                      <th>Proveedor</th>
                      <th>Existencia</th>
                      <th>Cantidad</th>
                      <th>Motivo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

          foreach($inventario_almacen->mostrarTodo("idalmacen=".$valor2." and idinventario=".$valor) as $f)
           {
                      $pro=$proveedor->muestra($f['idproveedor']);
                      $idinventario_almacen=$f['idinventario_almacen'];
                      ?>
                      <tr>
                        <td><?php echo $f['lote'] ?></td>
                        <td><?php echo $f['fechaingreso'] ?></td>
                        <td><?php echo $pro['empresa'] ?></td>
                        <td><?php echo $f['existencias'] ?></td>
                        <td style="width: 60px;"> <input id="<?php echo $idinventario_almacen.'cantidad' ?>" name="<?php echo $idinventario_almacen.'cantidad' ?>" type="number" value="1" class="validate">
                        </td>
                         <td style="width: 100px;">
                            <select id="<?php echo $idinventario_almacen.'motivo' ?>" name="<?php echo $idinventario_almacen.'motivo' ?>">  
                                <option value="1" >Correción</option>    
                                <option value="2" >Perdido</option>
                                <option value="3" >Roto</option>  
                                
                            </select>
                         </td>
                          <td>

                           <?php
                                if ($f['existencias']>0) {
                              ?>
                              <button class="btn-jh red" onclick="egresar('<?php echo $idinventario_almacen ?>','<?php echo $f['existencias'] ?>');"> <i class="fa fa-times"></i> Procesar</button>
                              <?php
                                }                              
                              ?>   
                          </td>
                      </tr>
                      <?php
                      }
                    ?>
                  </tbody>
                </table>
             </fieldset>  
                  </div>
     
                  </form>
              </div>    
            </div>
          </div>
          <?php
            //include_once("../../footer.php");
          ?>
        </section>
      </div>
    </div>
    <div id="idresultado"></div>
    <!-- end -->
    <!-- jQuery Library -->
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php"); 
    ?>

    <script type="text/javascript">

         $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Bfrtip',
        "order": [[ 0, "DESC" ]],
        buttons: [
             'excel', 'pdf' 
        ]
      });
    });
   function egresar(idAI,existencia)
   {
     cantidad=$('#'+idAI+'cantidad').val();
     cantidad2=$('#'+idAI+'cantidad').val();
     motivo=$('#'+idAI+'motivo').val();
     if (existencia>=cantidad) 
     {
         if (cantidad=='' || cantidad2<=0) 
         {
                swal("ERROR!", "Cantidad no valido", "error");
         }else{     
            swal({   
              title: "Estas Seguro?",   
              text: "Se registrará el Egreso",   
              type: "warning",   
              showCancelButton: true,   
              closeOnConfirm: false,   
              showLoaderOnConfirm: true,
            }, 
            function(){
                //var str = $( "#idform" ).serialize();
                  // alert (str);
                $.ajax({
                  url: "guardar.php",
                  type: "POST",
                  data: 'cantidad='+ cantidad+'&motivo='+motivo+'&idinventario_almacen='+idAI,
                  success: function(resp){
                    //alert(resp);
                    setTimeout(function(){     
                      console.log(resp);
                      $('#idresultado').html(resp);
                    }, 1000); 
                  }
                });
              
            });
         }
     }else{
           swal("ERROR!", "Cantidad no existe en el almacén", "error");
     }
     
   }
  
    
      

      function validaFloat(numero)
      {
        if (!/^([0-9])*[.]?[0-9]*$/.test(numero))
        {
          swal("ERROR!", "Ingrese precio valido", "error");
          $('#idprecio').val("");
        }
         
      }
    </script>
</body>

</html>