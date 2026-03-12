<?php
  $ruta="../../../";
  include_once($ruta."class/dominio.php");
  $dominio=new dominio;
  include_once($ruta."class/vadmejecutivo.php");
  $vadmejecutivo=new vadmejecutivo;
  include_once($ruta."class/admejecutivo.php");
  $admejecutivo=new admejecutivo;
  include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."class/tipo.php");
  $tipo=new tipo;
  include_once($ruta."class/area.php");
  $area=new area;
  include_once($ruta."class/usuario.php");
  $usuario=new usuario;
   include_once($ruta."class/solucion.php");
  $solucion=new solucion;
   include_once($ruta."class/prioridad.php");
  $prioridad=new prioridad;
  include_once($ruta."class/tipoticket.php");
  $tipoticket=new tipoticket;
  include_once($ruta."funciones/funciones.php");
  session_start(); 
   $fechaHoy=date('Y-m-d');

   $idus=$_SESSION["codusuario"];
  $lblcodeUs=ecUrl($idus);
   $usua=$usuario->muestra($idus);
  //$perUs=$persona->muestra($usua['idpersona']);
  $vadmeje=$vadmejecutivo->mostrarUltimo("idpersona=".$usua['idpersona']);
  $idadmejecutivo=$vadmeje['idvadmejecutivo'];

  $sol=$solucion->mostrarUltimo("idadmejecutivo=".$idadmejecutivo);
  $ticExiste=$ticket->muestra($sol['idticket']);


   //$ticSelec=$ticket->mostrarPrimero("estado=1");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      $hd_titulo="LISTA DE ATENCIÓN DE SOLICITUDES DE TICKETS";
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
          $idmenu=1125;
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
                      <th>Cod</th>
                       <th>Fecha solicitud</th>
                        <th>Hora solicitud</th>
                        <th>Solicitante</th> 
                        <th>Tipo Ticket</th>
                        <th>Prioridad</th>
                        <th>Tipo</th> 
                        <th>Area</th> 
                        <th>Problema</th>
                        <th>Descripción</th>
                         <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Cod</th>
                       <th>Fecha solicitud</th>
                       <th>Hora solicitud</th>
                       <th>Solicitante</th> 
                       <th>Tipo Ticket</th>
                        <th>Prioridad</th>
                      <th>Tipo</th> 
                      <th>Area</th> 
                      <th>Problema</th>
                      <th>Descripción</th>
                       <th>Estado</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $consulta="SELECT tic.idticket as idvticket,tic.idtipo, tic.idtipoticket, tic.idarea, tic.fecha as fechatic, tic.horacreacion as horatic, tic.problema as problematic, tic.descripcion as descripciontic, tic.estado as estadoprincipal, sol.*  
                                FROM ticket as tic 
                                INNER JOIN solucion as sol on sol.idticket = tic.idticket
                                WHERE tic.activo=1"; 
                  //and idadmejecutivo=$idadmejecutivo;
                    foreach($ticket->sql($consulta) as $f)//idtipo=142
                    {
                      
                       $lblcode=ecUrl($f['idvticket']);
                       $ti=$tipo->muestra($f['idtipo']);
                       $are=$area->muestra($f['idarea']);
                        $titic=$tipoticket->muestra($f['idtipoticket']);

                       $idticket=$f['idticket'];
                       //$solu=$solucion->mostrarUltimo("idticket=".$idticket." and idadmejecutivo=".$idadmejecutivo);
                       $lblcode2=ecUrl($f['idsolucion']);
                       $idsolucion=$f['idsolucion'];

                       $usuatick=$usuario->muestra($f['usuariocreacion']);
                        $vadmejetick=$vadmejecutivo->mostrarUltimo("idpersona=".$usuatick['idpersona']);

                       switch ($f['estadoprincipal']) 
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
                     $pri=$prioridad->muestra($f['idprioridad']);
                    ?>
                    <tr style=""><!--<?php //echo $estilo ?>-->
                      <td><?php echo $f['idticket'] ?></td>
                       <td><?php echo $f['fechatic'] ?></td>
                       <td><?php echo $f['horatic'] ?></td>
                       <td><?php echo $vadmejetick['nombre'].' '.$vadmejetick['paterno'] ?></td>
                       <td style="color:<?php echo $titic['color'] ?>"><b><?php echo $titic['nombre'] ?></b> </td>
                       <td><?php echo $pri['nombre'] ?></td> 
                       <td><?php echo $ti['nombre'] ?></td>
                      <td><?php echo $are['nombre'] ?></td>
                      <td><?php echo $f['problematic'] ?></td> 
                      <td><?php echo $f['descripciontic'] ?></td>              
                      <td><?php echo $estado ?></td>              

                      <td>
                        <?php
                        switch ($f['estadoprincipal']) 
                       {
                         case '1':
                         echo $estado;
                                ?>
                                  <p style="color:orange;">-1</p>
                                  <!-- PENDIENTE
                                  <a href="designar/?lblcode=<?php// echo $lblcode ?>" class="btn-jh waves-effect darken-4 orange"><i class="fa fa-pencil-square"></i> DESIGNAR ATENCIÓN </a>-->
                               <?php;
                           break;

                         case '2':
                               ?>
                               <a  href="detalle.php?lblcode=<?php echo $lblcode; ?>&lblcode2=<?php echo $lblcode2; ?>" class="btn waves-effect waves-light darken-4 blue"> <i class="fa fa-edit (alias)"></i> Seguir proceso </a>
                                 <!--<a  href="detalle.php?lblcode=<?php //echo $lblcode; ?>&lblcode2=<?php //echo $lblcode2; ?>" class="btn waves-effect waves-light darken-4 blue"> <i class="fa fa-edit (alias)"></i> Proceder </a> EN PROCESO-->
                                <?php
                           break;
                         case '3':
                                ?>
                                <button class="btn waves-effect darken-4 green" onclick="cargarsoldetalle('<?php echo $idsolucion ?>','<?php echo $idticket ?>');"><i class="fa fa-list"></i> Revisar</button> <!--EJECUTADO-->
                                <?php
                         break;
                         case '4':
                               ?>
                                <p style="color:red;"><?php echo $estado ?></p> <!--CANCELADO-->
                                <?php
                           break;
                            case '5':
                                ?>
                                  <!--<p style="color:purple;"><?php //echo $estado ?></p>-->
                                  <button class="btn waves-effect waves-light green" onclick="iniciarpantalla('<?php echo $f['idvticket'] ?>','<?php echo $f['problematic'] ?>','<?php echo $pri['nombre'] ?>');"> <i class="fa fa-ticket"></i> INICIAR </button>

                               <?php;
                           break;
                           case '6':
                               ?>
                                <p style="color:red;">-</p> <!--CANCELADO-->
                                <?php
                           break;
                           case '7':
                               ?>
                                <p style="color:red;"><i class="fa fa-times"></i></p> <!--CANCELADO-->
                                <?php
                           break;
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
              </div>
            </div>     
            </div>
          <div class="container">
            <div class="section">           
                <div id="modal2" class="modal">
                  <div class="modal-content">

                      <div class="col s12 m12 l12" style="border-radius: 5px; border: 1px solid #E8E8E8; background: white;">
                        
                        <div class="col s12 m12 l12" style="background: white; text-align: center; color:#0087AF; font-size: 25px; border-radius: 5px; border: #CBCBCB 1px solid; font-weight: bold;">
                INICIALIZANDO LA SOLICITUD DE TICKET...<br>
                <b style="color:gray;">Prioridad: </b><b id="idpriori"></b>
              </div>
                
                         <form class="col s12" id="idform" action="return false" onsubmit="return false" method="POST">
                          <input type="hidden" name="idticketImport" id="idticketImport" value="">
                <div class="col s12 m12 l12">
                    <div class="formcontent">  
                      <div class="row">
                       
                        <div class="input-field col s12 m6 l6">
                          <input id="idproblemaImport" name="idproblemaImport" readonly type="text" class="validate">
                          <label for="idproblemaImport">Ticket seleccionado</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                          <input id="idfecha" name="idfecha" readonly type="date" value="<?php echo $fechaHoy ?>" class="validate">
                          <label for="idfecha">Fecha inicio</label>
                        </div>

                        <div class="input-field col s12 m12 l12">
                          <textarea id="idobservacion" name="idobservacion" class="materialize-textarea" length="500">Iniciado con normalidad</textarea>
                        <label for="idobservacion">Observación</label>
                        </div>
                        <div class="col s12 m12 l12" style="text-align: right;">
                          <a id="btnSave" class="btn waves-effect waves-light darken-4 red"><i class="fa fa-save"></i> INICIALIZAR</a>
                          </div>                     
                      </div>
                </div>
              </form>
               
              </div>
                  </div>
                  <div class="modal-footer">
                  
                  </div>
                </div>
            </div>
          </div>
          <div class="container">
                    <div class="section">           
                        <div id="modal5" class="modal">
                          <div class="modal-content">                   
                                <div class="col s12 m12 l12"  style="background-color: white;">
                                  <div class="table-responsive">  
                                                                               
                                        <div id="result2">Mostrar Avances</div>
                                   </div>
                                   <!-- <div class="titulo">Lista de item ingresado a la fecha</div> -->
                                    
                                </div> 
                          </div>
                          <div class="modal-footer">
                            <a id="btnb" onclick="cerrar5();" class="btn waves-effect waves-light red"><i class="fa fa-clear"></i> CERRAR</a>
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
 function iniciarpantalla(idact,nombre,prio)
  {
    $('#idticketImport').val(idact);
    $('#idproblemaImport').val(nombre);
     $('#idpriori').text(prio);
    $('#modal2').openModal();
  }
 
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
                  //alert(str);
                  $.ajax({
                    url: "guardarInicio.php",
                    type: "POST",
                    data: str,
                    success: function(resp){
                      setTimeout(function(){     
                            console.log(resp);
                            $('#idresultado').html(resp);  
                          }, 100);
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
  function cancelar(id)
  {
     swal({
                  title: "¿Esta seguro?",
                  text: "CANCELAR",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#2c2a6c",
                  confirmButtonText: "Si, estoy seguro",
                   closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                 // var str = $( "#idform" ).serialize();
                  $.ajax({
                    url: "cancelar.php",
                    type: "POST",
                    data: "idticket="+id,
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
  function cargarsoldetalle(idsol,idtic)
  {
    //alert('ingresa');
    $('#modal5').openModal();
    $.ajax({
              url: "mostrar_soluciondetalle.php",
              method: "POST",
              data: "idticket="+idtic+"&idsolucion="+idsol,
              success: function(data){
                  $("#result2").html(data);
                  //alert(data);
              }
            });
  }
  function cerrar5()
{
   $('#modal5').closeModal();
}
    </script>
</body>

</html>