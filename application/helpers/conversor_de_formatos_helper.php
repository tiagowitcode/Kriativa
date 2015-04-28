<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');
	
	function data_us_to_br($dateUSA){
		if($dateUSA){
			$ano = substr($dateUSA,0,4);
			$mes = substr($dateUSA,5,2);
			$dia = substr($dateUSA,8,2);
			$dateBR = $dia .'/' .$mes .'/' .$ano;
			return $dateBR;
		}
		else {
			return null;
		}
	}
	
	function data_br_to_us($dateBR){
		if($dateBR){
			$ano = substr($dateBR,6,4);
			$mes = substr($dateBR,3,2);
			$dia = substr($dateBR,0,2);
			$dateUSA = $ano .'-' .$mes .'-' .$dia;
			return $dateUSA;
		}
		else {
			return null;
		}
	}
	
	
	function money_br_to_us($valor){
	
		
		$valor = str_replace(',','',$valor);
		$valor = str_replace('.','',$valor);
		
		$doisult = substr($valor,(strlen($valor)-2),strlen($valor));
		
		$restovalor = substr($valor, 0, -2);
		
		return $restovalor . "." . $doisult;
	
	
	
	}
	
	function money_us_to_br($valor){
	
		$valor = number_format($valor, 2, ',', '.');
		return $valor;
	
	}
	
	function limitarTexto($texto, $limite, $quebra = true){
	   $tamanho = strlen($texto);
	   if($tamanho <= $limite){ //Verifica se o tamanho do texto é menor ou igual ao limite
		  $novo_texto = $texto;
	   }else{ // Se o tamanho do texto for maior que o limite
		  if($quebra == true){ // Verifica a opção de quebrar o texto
			 $novo_texto = trim(substr($texto, 0, $limite))."...";
		  }else{ // Se não, corta $texto na última palavra antes do limite
			 $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
			 $novo_texto = trim(substr($texto, 0, $ultimo_espaco))."..."; // Corta o $texto até a posição localizada
		  }
	   }
	   return $novo_texto; // Retorna o valor formatado
	} 
	
	function mes_correto($data){
			$mes_certo = "";
			list($ano, $mes, $dia) = explode("-",$data); 
			
			if($mes == "01"){
				$mes_certo =  "janeiro";
			}
			if($mes == "02"){
				$mes_certo =  "fevereiro";
			}
			if($mes == "03"){
				$mes_certo =  "março";
			}
			if($mes == "04"){
				$mes_certo =  "abril";
			}
			if($mes == "05"){
				$mes_certo =  "maio";
			}
			if($mes == "06"){
				$mes_certo =  "junho";
			}
			if($mes == "07"){
				$mes_certo =  "julho";
			}
			if($mes == "08"){
				$mes_certo =  "agosto";
			}
			if($mes == "09"){
				$mes_certo =  "setembro";
			}
			if($mes == "10"){
				$mes_certo =  "outubro";
			}
			if($mes == "11"){
				$mes_certo =  "novembro";
			}
			if($mes == "12"){
				$mes_certo =  "dezembro";
			}
			return $mes_certo;
		}
	
	function mes_min($data){
			$mes_certo = "";
			list($ano, $mes, $dia) = explode("-",$data); 
			
			if($mes == "01"){
				$mes_certo =  "jan";
			}
			if($mes == "02"){
				$mes_certo =  "feb";
			}
			if($mes == "03"){
				$mes_certo =  "mar";
			}
			if($mes == "04"){
				$mes_certo =  "apr";
			}
			if($mes == "05"){
				$mes_certo =  "may";
			}
			if($mes == "06"){
				$mes_certo =  "june";
			}
			if($mes == "07"){
				$mes_certo =  "july";
			}
			if($mes == "08"){
				$mes_certo =  "august";
			}
			if($mes == "09"){
				$mes_certo =  "sep";
			}
			if($mes == "10"){
				$mes_certo =  "oct";
			}
			if($mes == "11"){
				$mes_certo =  "nov";
			}
			if($mes == "12"){
				$mes_certo =  "dec";
			}
			return $mes_certo;
		}
	
	/*function decimal_to_reaisbr($data){
		if($data){
			$data = str_replace(',','',$data);
			$data = str_replace('.',',',$data);
			return $data;
		}
		else{
			return null;
			
		}
	}
	
	function reaisbr_to_decimal($data){
		if($data){
			$data = str_replace('.','',$data);
			$data = str_replace(',','.',$data);
			return $data;
		}
		else{
			return null;
			
		}
	}*/
		
		
?>