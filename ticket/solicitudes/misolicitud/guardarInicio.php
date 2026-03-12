<?php
session_start();
$ruta="../../../";
include_once($ruta."class/solucion.php");
$solucion=new solucion;
include_once($ruta."class/ticket.php");
$ticket=new ticket;
extract($_POST);
$horaHoy=date('H:i:s');
 $solu=$solucion->mostrarUltimo("idticket=".$idticketImport);
	$valores=array(
		//"idticket"=>"'$idticketImport'",
		//"idadmejecutivo"=>"'$idadmejecutivo'",
		"fecha"=>"'$idfecha'",
		"horacreacion"=>"'$horaHoy'",
		"observacion"=>"'$idobservacion'",
		"estado"=>"'2'" 
	 );	
	if($solucion->actualizar($valores,$solu['idsolucion']))
	{
		$valoresticket=array(
		"estado"=>"'2'" //EN EJECUCION
	 );	
      $ticket->actualizar($valoresticket,$idticketImport);
      //$solu=$solucion->mostrarUltimo("idticket=".$idticketImport." and idadmejecutivo=".$idadmejecutivo);
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
			location.href="detalle.php?lblcode=<?php echo $lblcode; ?>&lblcode2=<?php echo $lblcode2; ?>";
			
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