<?php
session_start();
$ruta="../../";
include_once($ruta."class/proveedor.php");
$proveedor=new proveedor; 
extract($_POST);
$empresa=strtoupper($idempresa); 
$direccion=strtoupper($iddireccion);
$encargado=strtoupper($idencargado); 
 
	$valores=array(
		"empresa"=>"'$empresa'",
		"nit"=>"'$idnit'",
		"direccion"=>"'$direccion'",
		"telefono"=>"'$idtelefono'",
		"encargado"=>"'$encargado'",
		"estado"=>"'1'"		 
	 );	
	if($proveedor->insertar($valores))
	{
		 
		  	?>
				<script type="text/javascript">
				swal({
					title: "Exito !!!",
					text: "Proveedor Registrado Correctamente",
					type: "success",
					showCancelButton: false,
					confirmButtonColor: "#28e29e",
					confirmButtonText: "OK",
					closeOnConfirm: false
		          }, function () {
					location.href="../listar";
		          });
				</script>
			<?php
	}
	else{
		?>
			<script type="text/javascript">
				setTimeout(function() {
		            Materialize.toast('<span>2 No se pudo realizar la Operacion. Consulte con su proveedor</span>', 1500);
		        }, 1500);
			</script>
		<?php
	 }
 
?>