<?php
  $ruta="../../"; 
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
   include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
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
      $hd_titulo="ASIGNAR ITEM A USUARIO DE SISTEMA";
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
                  <a href="index.php?lblcode=<?php echo $lblcode2 ?>" class="btn blue"><i class="fa fa-reply"></i> Atras</a>    
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
                   <legend><div style="color:green;"><i class="fa fa-minus-square"></i> <strong><?php echo $hd_titulo; ?></strong> </div></legend> 
                <table id="example" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Lote</th>
                      <th>Fecha Ingreso</th>
                      <th>Proveedor</th>
                      <th>Existencia</th>
                      <th>Cantidad</th>
                      <th>Motivo</th>
                      <th>Responsable</th>
                      <th>Descripción</th>
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
                        <td style="width: 60px;"> <input id="<?php echo $idinventario_almacen.'cantidad' ?>" name="<?php echo $idinventario_almacen.'cantidad' ?>" type="number" readonly value="1" class="validate">
                        </td>
                         <td style="width: 100px;">
                            <select id="<?php echo $idinventario_almacen.'motivo' ?>" name="<?php echo $idinventario_almacen.'motivo' ?>">  
                                <option value="3" >Asignación</option>  
                                
                            </select>
                         </td>
                         <td style="width: 200px;">
                            <div class="input-field col s12 m12 l12">
                                <select id="<?php echo $idinventario_almacen.'idadmejecutivo' ?>" name="<?php echo $idinventario_almacen.'idadmejecutivo' ?>">
                                  <option value="0">Seleccionar</option>
                                  <?php
                                    foreach($vadmejecutivo->mostrarTodo("estado=1") as $veje)
                                    {
                                      ?>
                                        <option value="<?php echo $veje['idvadmejecutivo']; ?>"><?php echo $veje['nombre'].' '.$veje['paterno']; ?></option>
                                      <?php
                                    }
                                  ?>
                                </select>
                              </div>
                         </td>
                         <td style="width: 300px;">
                            <textarea id="<?php echo $idinventario_almacen.'iddescripcion' ?>" name="<?php echo $idinventario_almacen.'iddescripcion' ?>" class="materialize-textarea"></textarea>
                                <label for="<?php echo $idinventario_almacen.'iddescripcion' ?>"></label>
                         </td>
                          <td>

                           <?php
                                if ($f['existencias']>0) {
                              ?>
                              <button class="btn black" onclick="asignaritem('<?php echo $idinventario_almacen ?>','<?php echo $f['existencias'] ?>');"> <i class="fa fa-check-square-o "></i> Asignar</button>
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
        "order": [[ 3, "DESC" ]],
        buttons: [
             'excel', 'pdf' 
        ]
      });
    });
   function asignaritem(idAI,existencia)
   {
     cantidad=$('#'+idAI+'cantidad').val();
     cantidad2=$('#'+idAI+'cantidad').val();
     motivo=$('#'+idAI+'motivo').val();

     idadmeje=$('#'+idAI+'idadmejecutivo').val();
     iddesc=$('#'+idAI+'iddescripcion').val();
     if (existencia>=cantidad) 
     {
         if (cantidad=='' || cantidad2<=0 || idadmeje==0) 
         {
                swal("ERROR!", "Cantidad no valido y/o selección de Usuario", "error");
         }else{     
            swal({   
              title: "Estas Seguro?",   
              text: "Asignar item",   
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
                  data: 'cantidad='+ cantidad+'&motivo='+motivo+'&idinventario_almacen='+idAI+'&idadmejecutivo='+idadmeje+'&iddescripcion='+iddesc,
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