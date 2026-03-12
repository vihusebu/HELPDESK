<?php
session_start();
$ruta="../../../";
include_once($ruta."class/infraestructura.php");
$infraestructura=new infraestructura;
extract($_POST);

//$idnombre=strtoupper($iddispositivo);

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
		//"estado"=>"'1'"
	 );	
	if($infraestructura->insertar($valores))
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