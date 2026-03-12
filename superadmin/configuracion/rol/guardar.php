<?php 
	$ruta="../../../";
	include_once($ruta."class/rol.php");
	$rol=new rol;
	include_once($ruta."class/dominio.php");
	$dominio=new dominio;
	extract($_POST);
	session_start();
$idnombre=strtoupper($idnombre);


        $dom=$dominio->mostrarUltimo("tipo='CAAS'");
		$nronuevo=$dom['codigo']+1;
            $valoresDom=array(
			     "codigo"=>"'$nronuevo'",
			     "short"=>"'0'",
			     "nombre"=>"'$idnombre'",
			     "valor1"=>"'0'",
			     "valor2"=>"'0'",
			     "tipo"=>"'CAAS'",
			     "tipo2"=>"'0'"
			);	
			$dominio->insertar($valoresDom);
			$domi=$dominio->mostrarUltimo("tipo='CAAS' and codigo='".$nronuevo."' and nombre='".$idnombre."'");
			$iddominio=$domi['iddominio'];

	$valores=array(
	     "Nombre"=>"'$idnombre'",
	     "Descripcion"=>"'$iddesc'",
	     "iddominio"=>"'$iddominio'"
	);	
	if($rol->insertar($valores))
	{
		
		
		?>
			<script  type="text/javascript">
				swal({
		              title: "Exito !!!",
		              text: "Datos Registrados Correctamente",
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
			Materialize.toast('<span>No se pudo guardar el registro</span>', 1500);
		</script>
		<?php
	}

?>