<?php
session_start();
$ruta="../../../";
include_once($ruta."class/periferico.php");
$periferico=new periferico;
extract($_POST);

//$idnombre=strtoupper($idnombre);

	$valores=array(
		"codigo"=>"'$idcodigo'",
		"tipo"=>"'$idtipo'",
		"modelo"=>"'$idmodelo'",
		"nroserie"=>"'$idnroserie'",
		"marca"=>"'$idmarca'",
		"fechaadquisicion"=>"'$idfechaadquisicion'",
		"asignado"=>"'$idasignado'",
		"ubicacion"=>"'$idubicacion'",
		"estado"=>"'$idestado'",
		"conectado"=>"'$idconectado'",
		"fechagarantia"=>"'$idfechagarantia'",
		"notas"=>"'$idnotas'"
	 );	
	if($periferico->actualizar($valores,$idperiferico))
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