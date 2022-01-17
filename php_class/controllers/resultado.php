<?php
class resultado
{
    function resultadoUs($ordenador, $usuario)
	{
		
		try
		{
			$rta = new StdClass();

			$jugada_del_usuario = intval($usuario);
			$jugada_del_ordenador = intval($ordenador);

				if($jugada_del_usuario==$jugada_del_ordenador){
					$rps = 'Resultado: Empate';
					$rta->ganador = 'E';
				}		    		
				if(($jugada_del_usuario==1&&$jugada_del_ordenador==3)||($jugada_del_usuario==2&&$jugada_del_ordenador==1)||($jugada_del_usuario==3&&$jugada_del_ordenador==2)){
					$rps = 'Resultado: Gana el usuario';
					$rta->ganador = 'U';
				}
		    		
				if(($jugada_del_usuario==3&&$jugada_del_ordenador==1)||($jugada_del_usuario==1&&$jugada_del_ordenador==2)||($jugada_del_usuario==2&&$jugada_del_ordenador==3)){
					$rps = 'Resultado: Gana el ordenador';
					$rta->ganador = 'P';
				}
		    		
				
            	$rta->tipo = 'exito';
				$rta->messRs = $rps;				
				return $rta;	

			
		}
		catch(Exception $e)
		{
			throw new Exception($e->getMessage());
		}
	}	
	
}