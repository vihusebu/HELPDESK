<?php
session_start();
$ruta="../../../";
include_once($ruta."class/virtualizacion.php");
$virtualizacion=new virtualizacion;
extract($_POST);

//$idnombre=strtoupper($idnombre);

	$valores=array(
		"codigo"=>"'$idcodigo'",
		"recurso"=>"'$idrecurso'",
		"tipo"=>"'$idtipo'",
		"proveedorplataforma"=>"'$idproveedorplataforma'",
		"ipendpoint"=>"'$idipendpoint'",
		"cpuramdisco"=>"'$idcpuramdisco'",
		"sistemaoperativo"=>"'$idsistemaoperativo'",
		"ambiente"=>"'$idambiente'",
		"propietario"=>"'$idpropietario'",
		"fechacreado"=>"'$idfechacreado'",
		"estado"=>"'$idestado'",
		"notas"=>"'$idnotas'"
	 );	
	if($virtualizacion->actualizar($valores,$idvirtualizacion))
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