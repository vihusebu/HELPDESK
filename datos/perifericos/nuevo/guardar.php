<?php
session_start();
$ruta="../../../";
include_once($ruta."class/periferico.php");
$periferico=new periferico;
extract($_POST);

//$idnombre=strtoupper($iddispositivo);

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
		//"estado"=>"'1'"
	 );	
	if($periferico->insertar($valores))
	{
		?>
		<script type="text/javascript">
		swal({
			title: "Exito !!!",
			text: "Registrado correctamente",
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
				swal("ERROR","No se registro, consulte con sistemas","error");
			</script>
		<?php
	 }

?>