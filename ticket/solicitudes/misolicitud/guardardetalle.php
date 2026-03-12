<?php
session_start();
$ruta="../../../";
include_once($ruta."class/soluciondetalle.php");
$soluciondetalle=new soluciondetalle;
extract($_POST);
$horaHoy=date('H:i:s');
	$valores=array(
		"idsolucion"=>"'$idsolucion'",
		"fecha"=>"'$idfecha'",
		"avance"=>"'$idobservacion'",
		"estado"=>"'1'" 
	 );	
	if($soluciondetalle->insertar($valores))
	{
		$soldet=$soluciondetalle->mostrarUltimo("idsolucion=".$idsolucion." and fecha='".$idfecha."'");
		$lblcode3=ecUrl($soldet['idsoluciondetalle']);
		//$lblcode2=ecUrl($solu['idsolucion']);

		 $lblcode=ecUrl($idticket);
		 $lblcode2=ecUrl($idsolucion);
		?>
		<script type="text/javascript">
		swal({
			title: "Exito !!!",
			text: "Se registro correctamentesssssssssss",
			type: "success",
			showCancelButton: false,
			confirmButtonColor: "#28e29e",
			confirmButtonText: "OK",
			closeOnConfirm: false
          }, function () {
          	//location.reload();
          	location.href="fotografia.php?lblcode=<?php echo $lblcode ?>&lblcode2=<?php echo $lblcode2 ?>&lblcode3=<?php echo $lblcode3; ?>";			
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