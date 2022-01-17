<?php
include_once('Libraries.php');
$rta = new StdClass();
try 
{
	switch ($_REQUEST['command']) 
	{
		
		case 'Cresultado':
		   	
		    $rs = new resultado();			
			$rta = $rs->resultadoUs($_REQUEST['ordenador'], $_REQUEST['usuario']);			
			break;

					
		default:
			echo "No existe command.";
			break;
	}	
} 
catch (Exception $e) 
{
	$rta->tipo = 'error';
	$rta->mensaje = $e->getMessage();
}

ob_clean();
echo json_encode($rta);