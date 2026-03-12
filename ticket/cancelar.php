<?php
session_start();
$ruta="../";
include_once($ruta."class/ticket.php");
$ticket=new ticket;
extract($_POST);

 $ti=$ticket->muestra($idticket);
 if ($ti['estado']==1) 
 {
 	$valores=array(
		"estado"=>"'4'"
	 );	
	if($ticket->actualizar($valores,$idticket))
	{
		?>
		<script type="text/javascript">
		swal({
			title: "Exito !!!",
			text: "Cancelado correctamente",
			type: "success",
			showCancelButton: false,
			confirmButtonColor: "#28e29e",
			confirmButtonText: "OK",
			closeOnConfirm: false
          }, function () {
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
 }else{
		?>
			<script type="text/javascript">
				swal("ERROR","No se cancela, porque ya se inicio el proceso","error");
			</script>
		<?php
 }

	

?>