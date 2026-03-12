<?php 
	if (!empty($_POST)) {
		extract($_POST);
		$ruta="../../../";
		$nombre="rol";
		$dominionom="dominio";
		include_once($ruta."class/".$nombre.".php");
		${$nombre}=new $nombre;
		include_once($ruta."class/".$dominionom.".php");
		${$dominionom}=new $dominionom;
		$rodatos=$rol->muestra($id);//
	    $iddominio=$rodatos['iddominio'];//

		${$nombre}->eliminar($id);
		${$dominionom}->eliminar($iddominio);
			?>
				<script  type="text/javascript">
					swal({
			              title: "Exito !",
			              text: "Eliminada correctamente",
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
	}
	else
	{
		?>
		<script type="text/javascript">
			setTimeout(function() {
	            Materialize.toast('<span>No se pudo eliminar intente de nuevo</span>', 1500);
	        }, 1500);
		</script>
		<?php
	}
?>