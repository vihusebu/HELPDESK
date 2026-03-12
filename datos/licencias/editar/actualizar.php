<?php
session_start();
$ruta="../../../";
include_once($ruta."class/licencia.php");
$licencia=new licencia;
extract($_POST);

//$idnombre=strtoupper($idnombre);

	$valores=array(
		"codigo"=>"'$idcodigo'",
		"software"=>"'$idsoftware'",
		"tipolicencia"=>"'$idtipolicencia'",
		"clave"=>"'$idclave'",
		"proveedor"=>"'$idproveedor'",
		"fechaadquicicion"=>"'$idfechaadquicicion'",
		"fechaexpiracion"=>"'$idfechaexpiracion'",
		"cantidad"=>"'$idcantidad'",
		"asignado"=>"'$idasignado'",
		"costo"=>"'$idcosto'",
		"estado"=>"'$idestado'",
		"renovacion"=>"'$idrenovacion'",
		"notas"=>"'$idnotas'"
	 );	
	if($licencia->actualizar($valores,$idlicencia))
	{
		?>
		<script type="text/javascript">
		swal({
			title: "Exito !!!",
			text: "Actualizado correctamente",
			type: "success",
			showCancelButton: false,
			confirmButtonColor: "#3ABD8D",
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
				swal("ERROR","No se actualizo, consulte con sistemas","error");
			</script>
		<?php
	 }

?>