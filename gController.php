<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class gController extends BaseController
{
    //
    public function Identificar(Request $request)
    {
    	if($request)
    	{
    		$placa=$request->get('placa');
    		$fecha=$request->get('fecha');
    		$hora= floatval($request->get('hora'));
    		$digito=substr($placa, -1);
    		if($fecha=='sabado' || $fecha=='domingo')
    		{
    			
    			return 'PUEDE CIRCULAR SIN RESTRICCION';
    		}
    		else if($fecha=='lunes' && $digito=='1' || $placa=='2')
    		{
    			
    			return 'PUEDE CIRCULAR';
    		}
    		else if($fecha=='martes' && $digito=='3' || $placa=='4')
    		{
    			
    			return 'PUEDE CIRCULAR';
    		}
    		else if($fecha=='miercoles' && $digito=='5' || $placa=='6')
    		{
    			
    			return 'PUEDE CIRCULAR';
    		}
    		else if($fecha=='jueves' && $digito=='7' || $placa=='8')
    		{
    			
    			return 'PUEDE CIRCULAR';
    		}
    		else if($fecha=='viernes' && $digito=='9' || $placa=='0')
    		{
    			
    			return 'PUEDE CIRCULAR';
    		}

    		else if (($hora>=0 && $hora<7) || ($hora>=19.30 && $hora<24)) {
    			return "PUEDE CIRCULAR EN SU HORARIO RESPECTIVO DONDE NO RIGE PICO Y PLACA TENGA CUIDADO!";
    		}
    	
    		else
    		{
    			
    			return "NO PUEDE CIRCULAR";
    		}

    		
    	}

    	
    }
}
