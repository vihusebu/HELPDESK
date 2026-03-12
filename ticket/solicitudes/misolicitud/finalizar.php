<?php
session_start();
$ruta="../../../";
include_once($ruta."class/ticket.php");
$ticket=new ticket;
include_once($ruta."class/solucion.php");
$solucion=new solucion;
extract($_POST);
$horaHoy=date('H:i:s');
	$valores=array(		
		"estado"=>"'3'"
	 );	
	if($ticket->actualizar($valores,$idticketFin))
	{
		$valores=array(
		"fechafin"=>"'$idfechafin'",
		"horafin"=>"'$horaHoy'",
		"descripcionfin"=>"'$iddescripcionfin'"
	 );	
	   $solucion->actualizar($valores,$idsolucionFin);
		//$lblcode=ecUrl($idticketFin);
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
			location.href="index.php";
			
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