<?php
  $ruta="../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."class/admejecutivo.php");
  $admejecutivo=new admejecutivo;
  include_once($ruta."class/usuario.php");
  $usuario=new usuario;
   include_once($ruta."class/inventario.php");
  $inventario=new inventario;
   include_once($ruta."class/movimiento.php");
  $movimiento=new movimiento;
  include_once($ruta."funciones/funciones.php");
  session_start();  
  extract($_GET);

   $fechaHoy=date('Y-m-d');
   //$idus=$_SESSION["codusuario"];
  //$lblcodeUs=cUrl($idus);
  // $usua=$usuario->muestra($idus);
  //$perUs=$persona->muestra($usua['idpersona']);

   $valor=dcUrl($lblcode);
  $vadmeje=$vadmejecutivo->muestra($valor);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="LISTA DE ITEMS DESIGNADOS";
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
          $idmenu=1123;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row " >
              <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                <div class="col s12 m12 l12"><?php echo $hd_titulo; ?></div>
              
              </div>
              <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                  <div class="card">
                    <div class="card-content blue" style="color:white; text-align: center; font-size: 20px;">
                        <b class="card-stats-title" style="font-weight: bold;">Usuario: <?php echo $vadmeje['nombre'].' '.$vadmeje['paterno'].' '.$vadmeje['materno'] ?> <i class="mdi-editor-insert-invitation"></i> </b>
                        <h4 class="card-stats-number"></h4>
                    </div>
                </div>
              </div>

              </div>
            </div>
          </div>
     
          <div class="container">
            <div class="section">
              <div class="row" >
              <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        
                <table id="example2" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                     <th>Fecha designado</th>
                       <th>Hora designado</th>
                      <th>Nombre Item</th> 
                      <th>Cantidad</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>Fecha designado</th>
                       <th>Hora designado</th>
                      <th>Nombre Item</th> 
                      <th>Cantidad</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach($movimiento->mostrarTodo("idadmejecutivo=".$valor." and motivo=3") as $f)//idtipo=142
                    {
                      
                       $inven=$inventario->muestra($f['idinventario']);
                    ?>
                    <tr style="">
                       <td><?php echo $f['fechaingreso'] ?></td>
                       <td><?php echo $f['horacreacion'] ?></td>
                       <td><?php echo $inven['nombre'] ?></td>
                       <td><?php echo $f['cantidad'] ?></td> 
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>     
            </div>
          
         
        </section>

      </div>
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
      $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
        $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
          $('#example2').DataTable( {
        dom: 'Bfrtip',
        "order": [[ 0, "desc" ]],
        buttons: [
            //'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
         
    });

 
          //0=fecha actual dia
          //1=fecha cambiado

    function cambiaestado(id,estado){
      swal({
        title: "Estas Seguro?",
        text: "Cambiaras el estado al ejecutivo",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#28e29e",
        confirmButtonText: "Estoy Seguro",
        closeOnConfirm: false
      }, function () {      
        $.ajax({
          url: "cambiaestado.php",
          type: "POST",
          data: "id="+id+"&estado="+estado,
          success: function(resp){
            console.log(resp);
            $("#idresultado").html(resp);
          }   
        });
      }); 
    }
   
    $("#btnSave").click(function(){
        $('#btnSave').attr("disabled",true);
        if (validar()) 
        {       
       // alert('sadjaksjd');   
                swal({
                  title: "¿Esta seguro?",
                  text: "Se iniciara solicitud de ticket",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "SI",
                  closeOnConfirm: false
                }, function () {
                  var str = $( "#idform" ).serialize();
                  $.ajax({
                    url: "guardarInicio.php",
                    type: "POST",
                    data: str,
                    success: function(resp){
                      //alert(resp);
                      console.log(resp);
                      $("#idresultado").html(resp);
                    }
                  }); 
                });
        }else{
          swal("ERROR","Faltan datos","error");
        }
      });
function validar(){
  retorno=true;
  fec=$('#idfecha').val();
  obs=$('#idobservacion').val();  
  if(fec=="" || obs==""){
    retorno=false;
  }
  return retorno;
}   


    </script>
</body>

</html>