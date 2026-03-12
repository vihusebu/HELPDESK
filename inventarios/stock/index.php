<?php
  $ruta="../../";
  include_once($ruta."class/vinventario_almacen.php");
  $vinventario_almacen=new vinventario_almacen;
  include_once($ruta."class/vinventario.php");
  $vinventario=new vinventario;
  include_once($ruta."class/almacen.php");
  $almacen=new almacen;
  include_once($ruta."class/umedida.php");
  $umedida=new umedida;
  include_once($ruta."funciones/funciones.php");

  include_once($ruta."class/inventario_almacen.php");
  $inventario_almacen=new inventario_almacen;
  session_start();

  extract($_GET);


  $idalmacen=dcUrl($lblcode);

  $datosalmacen = $almacen ->muestra($idalmacen);
  $lblcode2=ecUrl($datosalmacen['idalmacen']);
 // echo $idalmacen;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    $hd_titulo="Stock del almacen ";
    include_once($ruta."includes/head_basico.php");
    include_once($ruta."includes/head_tabla.php");
    include_once($ruta."includes/head_tablax.php");
  ?>
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
                <div class="col s12 m12 l12">
                        
              <!--     <h5 class="breadcrumbs-title">  <a class="btn-jh red" href="../../almacen/admin"><i class="fa fa-reply"> </i> Atrás</a><i class="fa fa-tag"></i> <?php echo $hd_titulo." ".$datosalmacen['nombre']?></h5> -->
                </div> 
              </div>
            </div>
          </div>
          <div class="container">
            <div class="section">
                  <div class="col s12 m12 l12" align="right">
                  <a class="btn red" href="../../almacen/admin"><i class="fa fa-reply"> </i> Atrás</a>
                </div>
             <fieldset class="formulario">
                   <legend><div><i class="fa fa-plus"></i> <strong><?php echo $hd_titulo; ?></strong> </div></legend> 
              <div class="col s12 m12 l12">
                   <div class="col s12 m12 l12" style="text-align: center; font-size: 30px; color:#008E4B">
                     <b><?php echo $datosalmacen['nombre']; ?></b>
                  </div>
                <table id="example" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Nro.</th>
                      <th>Item</th>
                      <th>Und. medida</th>                      
                      <th>Marca</th>
                       <th>Stock</th>
                     <!-- <th>Cantidad inventario</th> -->
                      <th>Stock Mínimo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $contar=0;
                    foreach($vinventario->mostrarTodo("") as $f)
                    {
                      $lblcode=ecUrl($f['idvinventario']);
                       $ume=$umedida->muestra($f['idumedida']);  
                        $contar++;
                      ?>
                      <tr>
                        <td><?php echo $contar ?></td>
                        <td><?php echo $f['item'] ?></td>
                        <td><?php echo $ume['short'] ?></td>
                        <td><?php echo $f['marca'] ?></td>
                        <td>
                          <?php 
                          $totalExis=0;
                          foreach($inventario_almacen->mostrarTodo("idalmacen=".$idalmacen." and idinventario=".$f['idvinventario']) as $ia)
                          {
                            $totalExis=$totalExis+$ia['existencias'];
                          }
                          if ($totalExis>0) 
                          {
                                echo $totalExis ;
                          }else{
                                echo 0;

                          }
                          ?>
                          </td>
                         <!-- <td><?php
                         // $cantiinventario=$totalExis/$f['cantidaduso'];

                           //echo round($cantiinventario) ?>
                             
                           </td> -->
                          <td><?php 
                              if ($totalExis<$f['minimo']) 
                              {
                                ?>
                                  <p style="background: red; color:white;"> 
                                    <?php echo $f['minimo'] ?>
                                  </p>
                                <?php
                                $animado='btn green animated infinite rubberBand';  
                              }else{
                               echo $f['minimo'];
                               $animado='btn green'; 
                              }

                           ?></td>
                        <td>
                         <?php
                              if ($totalExis==0) {
                            ?>
                                <a class="<?php echo $animado ?>" href="ingreso?lblcode=<?php echo $lblcode ?>&lblcode2=<?php echo $lblcode2 ?>"><i class="fa fa-edit"></i>Ingreso</a><br> 
                            <?php
                              } else {
                                ?>
                                <a class="<?php echo $animado ?>" href="ingreso?lblcode=<?php echo $lblcode ?>&lblcode2=<?php echo $lblcode2 ?>"><i class="fa fa-edit"></i>Ingreso</a>                                   
                              <a class="btn red" href="egreso?lblcode=<?php echo $lblcode ?>&lblcode2=<?php echo $lblcode2 ?>"><i class="fa fa-edit"></i>Egreso</a>
                               <!-- <button onclick="obtener_lotes('<?php //echo $f['idvinsumo'] ?>')" class="btn waves-effect darken-4 blue"> <i class="fa fa-share-square-o"></i> Lotes </button>-->
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
              </div>
             </fieldset>  
            </div>
          </div>
          <div class="container">
            <div class="section">
             <div class="row">
                <div id="modal2" class="modal" style="width:70%; height:100%;">
                  <div align="right">
                         <button class="btn-jh waves-effect waves-light red darken-4 modal-action modal-close"><i class="fa fa-times"></i></button>                         
                       </div>
                  <div class="modal-content">
                    <form class="col s12" id="idform2" action="return false" onsubmit="return false" method="POST">
                      <div class="col s12 m12 l12">
                        <div class="card-panel">
                          <div class="row">
                                <div class="table-responsive">                                            
                                  <div id="result">LISTA DE LOTES</div>
                                </div> 
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer"> 
                   
                  </div>
                </div>
             </div>
            </div>  
          </div>
          <?php
          //  include_once("../footer.php");
          ?>
        </section>
      </div>
    </div>
    <div class="row">
    </div>
    <div id="idresultado"></div>
    <!-- end -->
    <!-- jQuery Library -->
    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php");
      include_once($ruta."includes/script_tablax.php");
    ?>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
              // 'excel', 'pdf' 
        ]
      });
    });
       function obtener_lotes(idit)
       {        
        idalmacen='<?php echo $idalmacen ?>';
              $.ajax({
              url: "cargar/mostrar_lotes.php",
              method: "POST",
              data: "idalmacen="+idalmacen+"& idinventario="+idit,
              success: function(data){
                  $("#result").html(data);
                  //alert(data);
                   $('#modal2').openModal();
              }
            });
            
       }
    function recomendar(id,estado){
      //alert(estado);
      swal({
        title: "Recomendar ?",
        text: "El producto se mostrará en el slide de recomendados",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#e20a0b",
        confirmButtonText: "Si, Estoy Seguro!",
        closeOnConfirm: false
      }, function () {
        $.ajax({
          url: "recomendar.php",
          type: "POST",
          data:"id="+id+"&estado="+estado,
          success: function(resp){
            console.log(resp);
            $("#idresultado").html(resp);
          }
        });
      });
    }
    function destacar(id,estado){
      //alert(estado);
      swal({
        title: "Destacar ?",
        text: "El producto se mostrará en el slide principal",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#e20a0b",
        confirmButtonText: "Si, Estoy Seguro!",
        closeOnConfirm: false
      }, function () {
        $.ajax({
          url: "destacar.php",
          type: "POST",
          data:"id="+id+"&estado="+estado,
          success: function(resp){
            console.log(resp);
            $("#idresultado").html(resp);
          }
        });
      });
    }
    </script>
</body>

</html>