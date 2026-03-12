<?php
session_start();
$ruta="../../../";
include_once($ruta."class/software.php");
$software=new software;
extract($_POST);

$idnombre=strtoupper($idnombre);

	$valores=array(
		"codigo"=>"'$idcodigo'",
		"nombre"=>"'$idnombre'",
		"version"=>"'$idversion'",
		"tipo"=>"'$idtipo'",
		"licencia"=>"'$idlicencia'",
		"clavefolio"=>"'$idclavefolio'",
		"fechainstalacion"=>"'$idfechainstalacion'",
		"vencimiento"=>"'$idvencimiento'",
		"instaladoenhardware"=>"'$idinstaladoenhardware'",
		"responsable"=>"'$idresponsable'",
		"criticidad"=>"'$idcriticidad'",
		"notas"=>"'$idnotas'"
	 );	
	if($software->actualizar($valores,$idsoftware))
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