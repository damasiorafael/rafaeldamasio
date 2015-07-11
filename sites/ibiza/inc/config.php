<?php
//header("Content-Type: text/html; charset=utf8",true);
session_start();
//error_reporting(E_ALL);
error_reporting(E_ERROR);

if($_SERVER['SERVER_NAME'] == "localhost"){
	$host 	= "localhost";
	$user	= "root";
	$pass	= "";
	$bd		= "pgsskroton";
} else {
	/*
	$host 	= "localhost";
	$user	= "pgsskroton";
	$pass	= "PgssKroton@2015";
	$bd		= "psskroton";
	*/
	$host 	= "pgsskroton.cfcpvwksy2ah.sa-east-1.rds.amazonaws.com";
	$user	= "pgsskroton";
	$pass	= "PgssKroton.2015";
	$bd		= "psskroton";
}

$con = mysql_connect($host,$user,$pass);
$db = mysql_select_db($bd);

function protecao($string){

  // Passando a primeira letra pra Maiúsculo e o restante pra minúsculo 
  //$string = strtolower($string);
  
  // Verificando alguns elementos que não podem ser passado por POST e nem por GET, e trocando eles por vazio... 
  $string = str_replace("select", "", $string);
  $string = str_replace("delete", "", $string);
  $string = str_replace("create", "", $string);
  $string = str_replace("drop", "", $string);
  $string = str_replace("update", "", $string);
  $string = str_replace("drop table", "", $string);
  $string = str_replace("show table", "", $string);
  $string = str_replace("applet", "", $string);
  $string = str_replace("object", "", $string);
  $string = str_replace("'", "", $string);
  $string = str_replace("#", "", $string);
  $string = str_replace("=", "", $string);
  $string = str_replace("--", "", $string);
  $string = str_replace("-", "", $string);
  $string = str_replace(";", "", $string);
  $string = str_replace("*", "", $string);
  $string = strip_tags($string);
 
  return $string;
}

function consulta_db($sql){
	return mysql_query($sql);
}

function insert_db($sql){
	return mysql_query($sql);
}

function update_db($sql){
	return mysql_query($sql);
}

function deleta_db($sql){
	return mysql_query($sql);
}

function formata_data($data){
	$data = explode(" ", $data);

	$data1 = $data[0]; // DATA (xxxx-xx-xx)
	$data2 = $data[1]; // HORA (xx:xx:xx)
	
	$data1 = explode("-", $data1);
	$dia = $data1[2]; // Retorna o dia
	$mes = $data1[1]; // Retorna o mês
	$ano = $data1[0]; // Retorna o ano
	
	$data = $dia . "/" . $mes . "/" . $ano . " às " . $data2;
	return $data;
}

function formata_data_austrini($data){
	$data = explode("/", $data);

	$data1 = $data[0]; // DATA (xxxx-xx-xx)
	$data2 = $data[1]; // HORA (xx:xx:xx)
	
	if($data2 == "01"){
		$data2 = "jan";
	} else if($data2 == "02"){
		$data2 = "fev";
	} else if($data2 == "03"){
		$data2 = "mar";
	} else if($data2 == "04"){
		$data2 = "abr";
	} else if($data2 == "05"){
		$data2 = "mai";
	} else if($data2 == "06"){
		$data2 = "jun";
	} else if($data2 == "07"){
		$data2 = "jul";
	} else if($data2 == "08"){
		$data2 = "ago";
	} else if($data2 == "09"){
		$data2 = "set";
	} else if($data2 == "10"){
		$data2 = "out";
	} else if($data2 == "11"){
		$data2 = "nov";
	} else if($data2 == "12"){
		$data2 = "dez";
	}
	
	$data = $data1." ".$data2;
	return $data;
}

function formata_data_noticias($data){
	$data = explode(" ", $data);
	$data = explode("-", $data[0]);

	$data_dia = $data[2];
	$data_mes = $data[1];
	$data_ano = $data[0];

	if($data_mes == "01"){
		$data_mes = "Janeiro";
	} else if($data_mes == "02"){
		$data_mes = "Fevereiro";
	} else if($data_mes == "03"){
		$data_mes = "Março";
	} else if($data_mes == "04"){
		$data_mes = "Abril";
	} else if($data_mes == "05"){
		$data_mes = "Maio";
	} else if($data_mes == "06"){
		$data_mes = "Junho";
	} else if($data_mes == "07"){
		$data_mes = "Julho";
	} else if($data_mes == "08"){
		$data_mes = "Agosto";
	} else if($data_mes == "09"){
		$data_mes = "Setembro";
	} else if($data_mes == "10"){
		$data_mes = "Outubro";
	} else if($data_mes == "11"){
		$data_mes = "Novembro";
	} else if($data_mes == "12"){
		$data_mes = "Dezembro";
	}

	return $data_dia." de ".$data_mes." de ".$data_ano;
}

function formata_data_tira_horas($data){
	$data = explode(" ", $data);
	$data = explode("-", $data[0]);

	$data_dia = $data[2];
	$data_mes = $data[1];
	$data_ano = $data[0];

	return $data_dia."/".$data_mes."/".$data_ano;
}

function removeAcentos($string){
	$string = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $string));
	$string = strtolower($string);
	return $string;
}

function separaHora($hora, $seletor){
	$hora = explode("das ", $hora);
	$hora = explode(" às ", $hora[1]);
	return $hora[$seletor];
}

function montaArray($data, $separador){
	$data = explode($separador, $data);
	return $data;
}

function remove_accent($str){
  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
  return str_replace($a, $b, $str);
}

?>
