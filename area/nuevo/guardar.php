<?php
session_start();
$ruta="../../";
include_once($ruta."class/area.php");
$area=new area;
extract($_POST);

$idnombre=strtoupper($idnombre);

	$valores=array(
		"nombre"=>"'$idnombre'",
		"descripcion"=>"'$iddescripcion'",
		"estado"=>"'1'"
	 );	
	if($area->insertar($valores))
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