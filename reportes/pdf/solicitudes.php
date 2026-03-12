<?php
	session_start();
	$ruta="../../";
	include_once($ruta."class/dominio.php");
	$dominio=new dominio;
	include_once($ruta."class/vadmejecutivo.php");
	$vadmejecutivo=new vadmejecutivo;
	include_once($ruta."class/miempresa.php");
	$miempresa=new miempresa;
	include_once($ruta."class/usuario.php");
	$usuario=new usuario;
	include_once($ruta."class/ticket.php");
  $ticket=new ticket;
  include_once($ruta."class/tipo.php");
  $tipo=new tipo;
  include_once($ruta."class/area.php");
  $area=new area;
	include_once($ruta."funciones/funciones.php");
	include($ruta."recursos/qr/qrlib.php");
	include_once($ruta."class/vusuario2.php");
  $vusuario2=new vusuario2;
	require_once $ruta.'recursos/pdf/mpdf/vendor/autoload.php';

	/******************    SEGURIDAD *************/
	extract($_GET);
	//********* SEGURIDAD GET *************/

	$user=dcUrl($lblcode);
	//$idadmeje=dcUrl($lblcode2);
	$fechaactual=date('Y-m-d');
    $horaactual=date('H:i:s');

$MesInforme= date("Y-m-t",strtotime($fechaini));

if ($idestado==0) 
{
	$consulta="SELECT *
							  FROM ticket
							  WHERE activo=1 and fecha BETWEEN '$fechaini' AND '$fechafin' ORDER BY fechacreacion ASC";

}else{
  $consulta="SELECT *
							  FROM ticket
							  WHERE activo=1 and estado=$idestado and fecha BETWEEN '$fechaini' AND '$fechafin' ORDER BY fechacreacion ASC";
}

	$rutaImg=$ruta."imagenes/logo.png";
	$demp=$miempresa->muestra(1);

	$dus=$usuario->muestra($user);
	//$tba=$tipobanca->muestra($cred['idtipobanca']);
	//$eje=$vadmejecutivo->muestra($gr['idadmejecutivo']);
	//$ddom=$dominio->muestra($cred['frecuenciapago']);
	//$cuotacobrar=$cred['cuota']+1;
	//$canTCred=$credito->mostrarTodo("idgrupocredito=".$valor);

	$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
	$fontDirs = $defaultConfig['fontDir'];
	$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
	$fontData = $defaultFontConfig['fontdata'];

	//$consulta="SELECT sum(cuenta)  as 'maximo' FROM admcontrato where idsede=1";
	//$dcont=$credito->sql($consulta);
	//$dcont=array_shift($dcont);


	$mpdf = new \Mpdf\Mpdf([
			'fontDir' => array_merge([
		        $ruta.'recursos/font/titilium',
		    ]),
		    'fontdata' => $fontData + [
		        'frutiger' => [
		            'R' => 'TitilliumWeb-Regular.ttf',
		            'I' => 'TitilliumWeb-Italic.ttf',
		        ]
		    ],
		    'default_font' => 'frutiger',
		    'mode' => 'utf-8',
		    'margin_header' => 5, 
		    'margin_top' => 30, 
		    'orientation' => 'L'
		]
	);
$header='
	<table style="width:100%; font-size:12px; text-align:center;"  align="center">
        <tr >
            <td style="width:30%;" class="letras">
              <center>
                <img style="width:180px;" src="'.$rutaImg.'" ><br>
              </center>
            </td>
            <td style="width:30%;">
	            <table class="titREP" width="100%" align="center">
	            <tr>
	            	<td>
	            		<div class="titSUB">R E P O R T E</div>
	            		<div class="titPRI"><h3>LISTADO DE SOLICITUDES POR FECHAS</h3></div>
	            		<div class=""><h5>'.$fechaini.' á '.$fechafin.'</h5></div>
	            	</td>
	            </tr>
	            </table>
            </td>
            <td style="width:30%;">
	            <table border="0">
	              <tr>
	                <td>
	                  <table class="letras" cellpadding="2">
	                    <tr>
	                      <td align="right">
	                        FECHA ACTUAL:
	                      </td>
	                      <td align="left">
	                        <b>'.$fechaactual.'</b>
	                      </td>
	                    </tr>
	                    <tr>
	                      <td align="right">
	                        HORA ACTUAL:
	                      </td>
	                      <td align="left">
	                        <b>'.$horaactual.'</b>
	                      </td>
	                    </tr>
	                    <tr>
	                      <td align="right">
	                        Usuario:
	                      </td>
	                      <td align="left">
	                        <b>'.$dus['usuario'].'</b>
	                      </td>
	                    </tr>
	                  </table>
	                </td>
	              </tr>
	            </table>                     
            </td>
	  	</tr>
	</table>
	';

	$html = '
		<table class="tablaLIST">
			<thead>
				<tr>
				  <th style="text-align:left;">Nro.</th>
				  <th style="text-align:left;">Fecha solicitud</th>
				  <th style="text-align:left;">Hora solicitud</th>
				  <th style="text-align:left;">Tipo</th>
				  <th style="text-align:left;">Area</th>
				  <th style="text-align:left;">Problema</th>
				  <th style="text-align:left;">Descripción</th>
				  <th style="text-align:left;">Estado</th>
				</tr>
			</thead>
			<tbody>
				';
				
			
				$contar=0; 
				foreach($ticket->sql($consulta) as $f) 
				{
					 $ti=$tipo->muestra($f['idtipo']);
           $are=$area->muestra($f['idarea']);

                       switch ($f['estado']) 
                       {
                         case '1':
                            $estado='<p style="color:orange;">PENDIENTE</p>';
                           break;
                         
                         case '2':
                            $estado='<p style="color:blue;">EN PROCESO</p>';
                           break;
                         case '3':
                          $estado='<p style="color:green;">EJECUTADO</p>';
                         break;
                         case '4':
                            $estado='<p style="color:red;">CANCELADO</p>';
                           break;
                        }
                    $contar++;
					$html = $html.'
						<tr style="'.$estilo.'">
						  <td>'.$contar.'</td>
						   <td>'.$f['fecha'].'</td>
						    <td>'.$f['horacreacion'].'</td>
						   <td>'.$ti['nombre'].'</td>
						   <td>'.$are['nombre'].'</td>
						   <td>'.$f['problema'].'</td>
						   <td>'.$f['descripcion'].'</td>
						   <td>'.$estado.'</td>
						</tr>
					';
					//$nro++;
				}
				//$formula="";
				 
				$html = $html.'
			</tbody>
		  <tfoot>
		    <tr>
		    <td ></td>
		    <td ></td>
		    <td ></td>
		    <td ></td>
		    <td ></td>
		    <td ></td>
		    <td ></td>
		    <td ></td>
		    </tr>
		  </tfoot>
		</table>
<br>				
		
	';
	//==============================================================
	//==============================================================
	//==============================================================

	//$mpdf->SetDisplayMode('fullpage');

	$stylesheet = file_get_contents($ruta.'recursos/css/elisyam-1.5.css');
	$mpdf->WriteHTML($stylesheet,1); // The parameter 1 tells that this is css/style only and no
	$mpdf->SetHTMLFooter('
	<table width="100%">
	    <tr>
	        <td width="33%"></td>
	        <td width="33%" align="center"></td>
	        <td width="33%" style="text-align: right;">{PAGENO}/{nbpg}</td>
	    </tr>
	</table>');
	$mpdf->SetHeader($header,50);
	$mpdf->WriteHTML($html);
	$mpdf->Output();

?>
