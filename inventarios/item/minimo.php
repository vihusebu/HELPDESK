<?php
	$ruta="../../";
	include_once($ruta."class/inventario.php");
	$inventario=new inventario;
	include_once($ruta."funciones/funciones.php");
	
	extract($_POST);
	session_start();
    /*********** actualiza contrato  ***********/
	$fecha=date("Y-m-d");
	$hora=date("H:i:s");

$valores=array(
			 	"minimo"=>"'$idminimoImp'"
			   );
			if ($inventario->actualizar($valores,$idinventarioImp))
			{
				?>
					<script  type="text/javascript">
						swal({
							title: "Exito !!!",
							text: "Registrado correctamente",
							type: "success",
							showCancelButton: false,
							confirmButtonColor: "#28e29e",
							confirmButtonText: "OK",
							closeOnConfirm: false
				        }, function () {  
				            location.reload();
				        });
					</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
					swal("ERROR!", "No se registro la congiración", "error")
				</script>
				<?php
			}
    
    
?>