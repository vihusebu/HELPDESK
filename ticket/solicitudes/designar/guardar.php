<?php
session_start();
$ruta="../../../";
include_once($ruta."class/solucion.php");
$solucion=new solucion;
include_once($ruta."class/ticket.php");
$ticket=new ticket;
extract($_POST);
$horaHoy=date('H:i:s');
	$valores=array(
		"idticket"=>"'$idticketImport'",
		"idadmejecutivo"=>"'$idadmejecutivoOPER'",
		"idadmejecutivoSIS"=>"'$idadmejecutivoSIS'",
		"fechadesignacion"=>"'$idfechadesignacion'",
		"horadesignacion"=>"'$horaHoy'",
		"idprioridad"=>"'$idprioridad'",
		"idmovimiento"=>"'$idmovimiento'",
		"idinventario"=>"'$idinventario'",
		"observaciondesign"=>"'$idobservacion'",
		//"fecha"=>"'$idfecha'",
		//"observacion"=>"'$idobservacion'",
		"estado"=>"'5'"
	 );	
	if($solucion->insertar($valores))
	{
		$valoresticket=array(
		"estado"=>"'5'" //DESIGANCION
	 );	
      $ticket->actualizar($valoresticket,$idticketImport);
      $solu=$solucion->mostrarUltimo("idticket=".$idticketImport." and idadmejecutivo=".$idadmejecutivo);
      	$lblcode=ecUrl($idticketImport);
		$lblcode2=ecUrl($solu['idsolucion']);
		?>
		<script type="text/javascript">
		swal({
			title: "Exito !!!",
			text: "Se registro correctamente",
			type: "success",
			showCancelButton: false,
			confirmButtonColor: "#28e29e",
			confirmButtonText: "OK",
			closeOnConfirm: false
          }, function () {
			location.href="../";
			
          });
		</script>
	<?php
	}else{
		?>
			<script type="text/javascript">
				swal("ERROR","No se registro, consulte con sistemas","error");
			</script>
		<?php
	 }

?>