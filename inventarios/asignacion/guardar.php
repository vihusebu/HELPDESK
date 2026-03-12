<?php
$ruta="../../";
include_once($ruta."class/inventario_almacen.php");
$inventario_almacen=new inventario_almacen;

include_once($ruta."class/movimiento.php");
$movimiento=new movimiento;

include_once($ruta."funciones/funciones.php");

extract($_POST);
session_start();
$fecha=date("Y-m-d");
$hora=date("H:i:s");
//$lblcode=ecUrl($idalmacen);
 //$precio = $preciocompra/$idcantingreso;
$ital = $inventario_almacen->muestra($idinventario_almacen);
$idinventario=$ital['idinventario'];
$idalmacen=$ital['idalmacen'];
$idproveedor=$ital['idproveedor'];
//$precio=$ital['precio_compraU'];
$lote=$ital['lote'];
$existencia=$ital['existencias'];
$nuevacantidad=intval($existencia)-intval($cantidad);
 $valores2=array(
		"existencias"=>"'$nuevacantidad'" 
	);
 if ($inventario_almacen->actualizar($valores2,$idinventario_almacen)) 
 {
 		$valoresmovimiento=array(        	  
				"idalmacen"=>"'$idalmacen'",
				"idinventario"=>"'$idinventario'",
				"idproveedor"=>"'$idproveedor'",
				"tipomov"=>"'3'",//asignacion
				"cantidad"=>"'$cantidad'",
				//"preciocompraU"=>"'$precio'",
				//"preciototal"=>"'$idpreciototal'",  
				"idtransaccion"=>"'$idinventario_almacen'",
				"lote"=>"'$lote'",						
				"descripcion"=>"'ASIGNACION'",
				"motivo"=>"'$motivo'",
				"idadmejecutivo"=>"'$idadmejecutivo'",
				"estadoasignacion"=>"'1'", //1asignacion 2desasignado 3baja
				"descripcionasig"=>"'$iddescripcion'",
				"fechaingreso"=>"'$fecha'",
				"fechamantenimiento"=>"'$fecha'"				
				 );
			$movimiento->insertar($valoresmovimiento);
			?>
						<script  type="text/javascript">
							swal({
								title: "Exito !!!",
								text: "Egreso ejecutado correctamente",
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
	swal("ERROR!", "Error no se registro el egreso", "error");
</script>
<?php
 }    
?>
