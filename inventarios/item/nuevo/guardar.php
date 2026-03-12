<?php
	$ruta="../../../";
	include_once($ruta."class/inventario.php");
	$inventario=new inventario;
	include_once($ruta."funciones/funciones.php");
	
	extract($_POST);
	session_start();
    /*********** actualiza contrato  ***********/
	$fecha=date("Y-m-d");
	$hora=date("H:i:s");
	$idnombre=strtoupper($idnombre);
    $valores=array(
		"nombre"=>"'$idnombre'",
		"idmarca"=>"'$idmarca'",
		"idumedida"=>"'$idumedida'",
		"minimo"=>"'$idminimo'",
		"descripcion"=>"'$iddesc'"
	);
	if ($inventario->insertar($valores)) {
		/******** Se debera insertar contrato detalle *********/
		$dinsumo=$inventario->mostrarUltimo("nombre='$idnombre' and idmarca='$idmarca' and idumedida='$idumedida'");
		$idinventario=$dinsumo['idinventario'];
		$lblcode=ecUrl($idinventario);
			?>
			<script  type="text/javascript">
				swal({
					title: "Exito !!!",
					text: "Datos guardados correctamente",
					type: "success",
					showCancelButton: false,
					confirmButtonColor: "#28e29e",
					confirmButtonText: "OK",
					closeOnConfirm: false
		        }, function () {  
		            location.href="../editar/?lblcode=<?php echo $lblcode ?>";
		        });
			</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			swal("ERROR!", "No se guardo", "error")
		</script>
		<?php		
	}
    
?>