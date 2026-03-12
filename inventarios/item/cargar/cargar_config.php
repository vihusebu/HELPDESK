<?php 
include_once("../../../class/inventario.php");
$inventario=new inventario;

extract($_GET);
$it=$inventario->muestra($idinventario);

    $arrayJSON['idinventario']=$it['idinventario'];
     $arrayJSON['nombre']=$it['nombre'];
     $arrayJSON['minimo']=$it['minimo'];

	echo json_encode($arrayJSON);

?>