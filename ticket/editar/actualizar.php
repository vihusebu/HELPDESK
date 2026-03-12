<?php
session_start();
$ruta="../../";
include_once($ruta."class/ticket.php");
$ticket=new ticket;
extract($_POST);
$idproblema=strtoupper($idproblema);
	$valores=array(
		"idtipo"=>"'$idtipo'",
		"idarea"=>"'$idarea'",
		//"fecha"=>"'$idfecha'",
		"problema"=>"'$idproblema'",
		"descripcion"=>"'$iddescripcion'"
		//"estado"=>"'1'"//pendiente
	 );	
	if($ticket->actualizar($valores,$idticket))
	{
		?>
		<script type="text/javascript">
		swal({
			title: "Exito !!!",
			text: "Actualizado correctamente",
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