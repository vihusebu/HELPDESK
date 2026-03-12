<?php
session_start();
$ruta="../../";
include_once($ruta."class/ticket.php");
$ticket=new ticket;
include_once($ruta."class/comprobacion.php");
$comprobacion=new comprobacion;
extract($_POST);
$idobservacion=strtoupper($idobservacion);

switch ($idaprobacion) {
	case '6':
		$estado=1; //APROBADO
		break;
	
	case '7':
		$estado=2; //NO APROBADO
		break;
}

	$valores=array(
		"idticket"=>"'$idticketImport'",
		"idadmejecutivo"=>"'$idadmejecutivoAPRO'",
		"fecha"=>"'$idfecha'",
		"descripcion"=>"'$idobservacion'",
		"estado"=>"'$estado'"//pendiente
	 );	
	if($comprobacion->insertar($valores))
	{
      $comp=$comprobacion->mostrarUltimo("idticket=".$idticketImport." and idadmejecutivo=".$idadmejecutivoAPRO);
      $idcomprobacion=$comp['idcomprobacion'];
		$valoresTIC=array(
		"estado"=>"'$idaprobacion'",
		"idcomprobacion"=>"'$idcomprobacion'"
	    );	
		$ticket->actualizar($valoresTIC,$idticketImport);
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
			//location.href="../";
			location.reload();
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