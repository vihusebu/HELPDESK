<?php
session_start();
$ruta="../../../";
include_once($ruta."class/infraestructura.php");
$infraestructura=new infraestructura;
extract($_POST);

//$idnombre=strtoupper($idnombre);

	$valores=array(
		"codigo"=>"'$idcodigo'",
		"compomente"=>"'$idcompomente'",
		"tipo"=>"'$idtipo'",
		"modelo"=>"'$idmodelo'",
		"ubicacionfisica"=>"'$idubicacionfisica'",
		"ubicionlogica"=>"'$idubicionlogica'",
		"ipdirewall"=>"'$idipdirewall'",
		"responsable"=>"'$idresponsable'",
		"estado"=>"'$idestado'",
		"fechainstalacion"=>"'$idfechainstalacion'",
		"mantenimiento"=>"'$idmantenimiento'",
		"documentacion"=>"'$iddocumentacion'"
	 );	
	if($infraestructura->actualizar($valores,$idinfraestructura))
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