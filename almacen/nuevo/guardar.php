<?php
session_start();
$ruta="../../";
include_once($ruta."class/almacen.php");
$almacen=new almacen; 
extract($_POST);

$nombre=strtoupper($idnombre); 
 
	$valores=array(
		"nombre"=>"'$nombre'",
		"ubicacion"=>"'$idubicacion'",
		"descripcion"=>"'$iddescripcion'", 
		"estado"=>"'1'"		 
	 );	
	if($almacen->insertar($valores))
	{
		 
		  	?>
				<script type="text/javascript">
				swal({
					title: "Exito !!!",
					text: "Almacén Registrado Correctamente",
					type: "success",
					showCancelButton: false,
					confirmButtonColor: "#28e29e",
					confirmButtonText: "OK",
					closeOnConfirm: false
		          }, function () {
					//location.href="../listar";
					location.reload();
		          });
				</script>
			<?php
	}else{
		?>
			<script type="text/javascript">
				setTimeout(function() {
		            Materialize.toast('<span>2 No se pudo realizar la Operacion. Consulte con su proveedor</span>', 1500);
		        }, 1500);
			</script>
		<?php
	 }
 
?>