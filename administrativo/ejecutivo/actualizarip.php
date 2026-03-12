<?php 
	$ruta="../../";
	include_once($ruta."class/admejecutivo.php");
	$admejecutivo=new admejecutivo;
	include_once($ruta."class/usuario.php");
	$usuario=new usuario;
	include_once($ruta."funciones/funciones.php");
	extract($_POST);
	$id=dcUrl($id);
	session_start();
	$valores=array(
	     "ipusuario"=>"'$idipusuario'"
	);	
	if($admejecutivo->actualizar($valores,$idadmejecutivo))
	{
	?>	
			<script  type="text/javascript">
				    
		            location.reload();			
			</script>
		<?php
	}else{
		?>
			<script type="text/javascript">
				Materialize.toast('<span>No se pudo generar el registro</span>', 150);
			</script>
		<?php
	}
?>