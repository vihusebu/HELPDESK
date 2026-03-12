<?php
session_start();
$ruta="../../";
include_once($ruta."class/infraestructura.php");
$infraestructura=new infraestructura;
extract($_POST);

$valores=array(
		"activo"=>"'0'"
	 );	
	if($infraestructura->actualizar($valores,$id))
	{
		?>
		<script type="text/javascript">
		swal({
			title: "Exito !!!",
			text: "Eliminado correctamente",
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
	

?>