<?php
session_start();
$ruta="../../../";
include_once($ruta."class/redes.php");
$redes=new redes;
extract($_POST);

//$idnombre=strtoupper($iddispositivo);

	$valores=array(
		"codigo"=>"'$idcodigo'",
		"dispositivo"=>"'$iddispositivo'",
		"modelo"=>"'$idmodelo'",
		"ipmac"=>"'$idipmac'",
		"ubicacion"=>"'$idubicacion'",
		"vlan"=>"'$idvlan'",
		"funcion"=>"'$idfuncion'",
		"fabricante"=>"'$idfabricante'",
		"firmware"=>"'$idfirmware'",
		"puertos"=>"'$idpuertos'",
		"estado"=>"'$idestado'",
		"responsable"=>"'$idresponsable'",
		"notas"=>"'$idnotas'"
		//"estado"=>"'1'"
	 );	
	if($redes->insertar($valores))
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