<?php
	$ruta="../../../";
	include_once($ruta."class/nrolote.php");
	$nrolote=new nrolote;
	include_once($ruta."class/movimiento.php");
	$movimiento=new movimiento;
	include_once($ruta."class/inventario_almacen.php");
	$inventario_almacen=new inventario_almacen;

	include_once($ruta."funciones/funciones.php");
	
	extract($_POST);
	session_start();
    /*********** actualiza contrato  ***********/
	$fecha=date("Y-m-d");
	$hora=date("H:i:s");
    $lblcode=ecUrl($idalmacen);

//GENERAMOS EL NUMERO DE LOQUE QUE CORRESPONDA
    $lote=1;
    $idnrolote=0;
    $nl=$nrolote->mostrarUltimo("idalmacen=".$idalmacen." and idinventario=".$idinventario);       
    if (count($nl)>0) 
    {
    	$lote=$nl['nro']+1;
    	$idnrolote=$nl['idnrolote']; 
    }else{
    	$valoreslote=array( 
		"idalmacen"=>"'$idalmacen'", 
		"idinventario"=>"'$idinventario'",
		"nro"=>"'1'"
	    );
    	if ($nrolote->insertar($valoreslote))
    	{
    		$ini=$nrolote->mostrarUltimo("idalmacen=".$idalmacen." and idinventario=".$idinventario);
    		$lote=$ini['nro'];//+1;
    		$idnrolote=$ini['idnrolote'];
    	}
    }
    //INGRESAMOS EL ITEM
	$valoresIA=array(        	  
	"idalmacen"=>"'$idalmacen'",
	"idinventario"=>"'$idinventario'",
	"idproveedor"=>"'$idproveedor'",
	"lote"=>"'$lote'",			 
	"cantidad_maxima"=>"'100000000'",
	"cantidad_minima"=>"'5'",
	"existencias"=>"'$idcantidad'",
	//"cantidadinventario"=>"'$idcantidadinventario'",
	//"precio_compraU"=>"'$idpreciou'",
	"fechaingreso"=>"'$idfecha'",
	"fechavalidad"=>"'$idfechavalidad'",
	"descripcion"=>"'$iddescripcion'"
	 );
	if ($inventario_almacen->insertar($valoresIA))
	{
		$datoIA=$inventario_almacen->mostrarUltimo("idinventario=".$idinventario." and idalmacen=".$idalmacen." and existencias=".$idcantidad);
	    $idtransaccion=$datoIA['idinventario_almacen'];
		$valoresmovimiento=array(        	  
				"idalmacen"=>"'$idalmacen'",
				"idinventario"=>"'$idinventario'",
				"idproveedor"=>"'$idproveedor'",
				"tipomov"=>"'1'",//ingreso
				"cantidad"=>"'$idcantidad'",
				//"cantidadinventario"=>"'$idcantidadinventario'",
				//"preciocompraU"=>"'$idpreciou'",
				//"preciototal"=>"'$idpreciototal'",  
				"idtransaccion"=>"'$idtransaccion'",
				"lote"=>"'$lote'",						
				"descripcion"=>"'INGRESO'",
				"fechaingreso"=>"'$idfecha'"				
				 );

			$movimiento->insertar($valoresmovimiento);
			if ($lote>1) 
			{
				$valoresnrolote=array(   
				"nro"=>"'$lote'"				
				 );

			    $nrolote->actualizar($valoresnrolote,$idnrolote);
			}
				
			?>
			<script type="text/javascript">
			swal({
				title: "Exito !!!",
				text: "Ingreso Registrado Correctamente",
				type: "success",
				showCancelButton: false,
				confirmButtonColor: "#28e29e",
				confirmButtonText: "OK",
				closeOnConfirm: false
	          }, function () {
				location.href="../?lblcode=<?php echo $lblcode; ?>";
	          });
		 	</script>
		<?php
		}else{
			?>
				<script type="text/javascript">
					Materialize.toast('<span>No se pudo guardar el inventario en Almacén</span>', 1500);
				</script>
				<?php
		}
	

    
?>