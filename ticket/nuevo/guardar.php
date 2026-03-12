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
		"fecha"=>"'$idfecha'",
		"idtipoticket"=>"'$idtipoticket'",
		"problema"=>"'$idproblema'",
		"descripcion"=>"'$iddescripcion'",
		"estado"=>"'1'"//pendiente
	 );	
	if($ticket->insertar($valores))
	{
		$tic=$ticket->mostrarUltimo("idtipo=".$idtipo." and idarea=".$idarea." and fecha='".$idfecha."'");
		$lblcode=ecUrl($tic['idticket']);
		?>
		<script type="text/javascript">
		swal({
			title: "Exito !!!",
			text: "Datos registrado, proseduir con registro de foto",
			type: "success",
			showCancelButton: false,
			confirmButtonColor: "#28e29e",
			confirmButtonText: "OK",
			closeOnConfirm: false
          }, function () {
			location.href="../editar/?lblcode=<?php echo $lblcode; ?>";
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