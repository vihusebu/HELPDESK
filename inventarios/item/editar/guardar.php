<?php
	$ruta="../../../";
	include_once($ruta."class/inventario.php");
	$inventario=new inventario;

	include_once($ruta."funciones/funciones.php");
	extract($_POST);
	session_start();
    /*********** actualiza contrato  ***********/
    $idnombre=strtoupper($idnombre);
    $valores=array(
		"nombre"=>"'$idnombre'",
		"idmarca"=>"'$idmarca'",
		"idumedida"=>"'$idumedida'",
		"descripcion"=>"'$iddesc'"
	);
	if ($inventario->actualizar($valores,$idinventario)) {
		?>
			<script  type="text/javascript">
				swal("EXITO","Datos actualizados correctamente","success");
			</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			swal("ERROR","No se pudo guardar","error");
		</script>
		<?php		
	}
    
?>