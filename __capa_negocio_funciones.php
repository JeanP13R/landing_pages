<?php
//REDIRECCIONAR
function pagina_redireccionar($pagina){
	echo "<script language='Javascript'>document.location.href='$pagina';</script>";
}
function popup_abrir($pagina){
	echo "<script>
		window.open('".$pagina."','-','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=700,height=400,directories=no,location=no');
	</script>";
}
	function pagina_redireccionar_programado($pagina,$segundos){
		$milisegundos=$segundos*1000;
		//echo "<meta HTTP-EQUIV='REFRESH' content='$segundos; url=$pagina'>";
		echo "<script language='Javascript'>var timer = setTimeout(function() {document.location.href='$pagina'}, $milisegundos);</script>";
	}
//END REDIRECCIONAR
//ALERTAS

function alerta($titulo, $descripcion, $tipo){
	/*
	TIPOS: danger - warning - success - info
	*/
	echo '<div class="alert alert-'.$tipo.'" role="alert">
			<h4 class="alert-heading">'.$titulo.'</h4>
			<div class="alert-body">
				'.$descripcion.'
			</div>
		</div>';
}

//END ALERTAS
//FECHAS
function fecha_obtener($huso){
	return date('Y/m/d H:i:s');
}
function fechas_resta_detallada($fecha1,$fecha2){
	$fecha1 = $x['fechavencimiento'];
	$fecha2 = BA_fecha_obtener('huso');

	$diff = abs(strtotime($fecha2) - strtotime($fecha1));

	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

	printf("%d years, %d months, %d days\n", $years, $months, $days);
}
function fechas_resta_dias($fecha1,$fecha2){
	$diff = strtotime($fecha2) - strtotime($fecha1);
	return $diff/(60*60*24);
}
//END FECHAS
//URL
function obtener_url_completa_v1($forwarded_host = false){
    $ssl   = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on';
    $proto = strtolower($_SERVER['SERVER_PROTOCOL']);
    $proto = substr($proto, 0, strpos($proto, '/')) . ($ssl ? 's' : '' );
    if ($forwarded_host && isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
        $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
    } else {
        if (isset($_SERVER['HTTP_HOST'])) {
            $host = $_SERVER['HTTP_HOST'];
        } else {
            $port = $_SERVER['SERVER_PORT'];
            $port = ((!$ssl && $port=='80') || ($ssl && $port=='443' )) ? '' : ':' . $port;
            $host = $_SERVER['SERVER_NAME'] . $port;
        }
    }
    $request = $_SERVER['REQUEST_URI'];
    return htmlspecialchars($proto . '://' . $host . $request);
}
function obtener_url_completa_v2(){
    return 'http://' . $_SERVER['SERVER_NAME'].':'. $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
}
function uri($carpetas_profundidad){
	$uri = $_SERVER['REQUEST_URI'];
	$uripath = explode('/', $uri);
	$i=1;
	$REQUEST_URI="";
	foreach($uripath as $arreglo){
		if (($i>1) and (($i<=$carpetas_profundidad+1))){
			$REQUEST_URI = $REQUEST_URI.$arreglo.'/';
		}
		$i++;
	}
	if (!islocalhost()){
        $REQUEST_URI=$REQUEST_URI.'/';
    }
	return $REQUEST_URI;
}
function uri_paginas($carpetas_profundidad){
	$uri = $_SERVER['REQUEST_URI'];
	if (strpos($uri, '?') !== false) {
		$uri = strstr($uri, '?', true);
	}
	$uripath = explode('/', $uri);
	$i=1;
	$REQUEST_URI="";
	foreach($uripath as $arreglo){
		if (($i>$carpetas_profundidad+1)){
			$REQUEST_URI = $REQUEST_URI.$arreglo.'/';
		}
		$i++;
	}
	return $REQUEST_URI;
}
function dominio_obtener(){
	$url="http://".$_SERVER['HTTP_HOST'];
	return $url;
}
//SERVIDOR
function islocalhost($whitelist = ['127.0.0.1', '::1', 'localhost']) {
    return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}
function fecha_espanol($fecha){
   $ano = date('Y',$fecha);
   $mes = date('n',$fecha);
   $dia = date('d',$fecha);
   $diasemana = date('w',$fecha);
   $diassemanaN= array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
   $mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   return $diassemanaN[$diasemana].", $dia de ". $mesesN[$mes] ." de $ano";
}  
function ip_obtener(){
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];       
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];   
    return $_SERVER['REMOTE_ADDR'];
}


//FECHA
function mes_nombre_obtener($numero){
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	return $meses[$numero-1];
}

function fecha_larga_obtener(){
	return date('d')." de ".mes_nombre_obtener(date('n'))." de ".date('Y');
}

function fecha_corta_obtener($anos_mas){
	return date('d')."/".date('m')."/".(intval(date('Y'))+$anos_mas);
}

//POST
function post_recibir($campo){
	if (isset($_POST[$campo])){
		return $_POST[$campo];
	} else {
		return '';
	}
}

//GET
function get_recibir($campo){
	if (isset($_GET[$campo])){
		return $_GET[$campo];
	} else {
		return '';
	}
}

function ymd_to_dmy($valor){
	return date("d/m/Y", strtotime(substr($valor,0,10)));
}

function fechas_cuenta_regresiva($dias){
	$diasredondo = floor($dias);
	$horas = ($dias-$diasredondo)*24;
	$horasredondo = floor($horas);
	$minutos = ($horas-$horasredondo)*60;
	$minutosredondo = floor($minutos);
	$segundos = ($minutos-$minutosredondo)*60;
	$segundosredondo = floor($segundos);
	
	return $diasredondo.'d '.$horasredondo.'h '.$minutosredondo.'m '.$segundosredondo.'s';
}

function archivo_verificar_existe($archivo){
	if (file_exists($archivo)) {
		return 1;
	} else {
		return 0;
	}	
}
//CORREO
function correo_verificar_integridad($correoelectronico){ 
	if (filter_var($correoelectronico, FILTER_VALIDATE_EMAIL)){ 
		return 0; 
	} else { 
		return 1; 
	} 
}

function correo_enviar_simple($servidor, $remitente, $destinatario, $asunto, $mensaje){ 
	ini_set("SMTP",$servidor);
	ini_set("sendmail_from",$remitente);

	$resultado = mail($destinatario,$asunto,$mensaje);

	if($resultado) {
		return 1;
	} else {
		return 0;
	}
}

function correo_enviar_phpmailer($servidor, $usuario, $remitente, $contrasena, $destinatario, $asunto, $mensaje){ 
	require_once('assets\PHPMailer-master\src\PHPMailer.php');
	require_once('assets\PHPMailer-master\src\SMTP.php');
	require_once('assets\PHPMailer-master\src\Exception.php');
	
	$mail = new PHPMailer\PHPMailer\PHPMailer();

	// Configura el servidor SMTP
	$mail->isSMTP();
	$mail->Host = $servidor;
	$mail->SMTPAuth = false;
	$mail->SMTPAutoTLS = false;
	$mail->SMTPSecure = false;
	$mail->Username = $usuario;
	$mail->Password = $contrasena;
	$mail->Port = 25;

	// Configura el remitente y el destinatario
	$mail->setFrom($remitente, '');
	$mail->addAddress($destinatario, '');
	
	// Establecemos que el contenido del mensaje será HTML
	$mail->isHTML(true);

	// Configura el asunto y el cuerpo del mensaje
	$mail->Subject = $asunto;
	$mail->Body = $mensaje;

	if ($mail->send()) {
		return 0;
	} else {
		return $mail->ErrorInfo;
	}
}

//CONFIGURACION
function configuracion_obtener($campo){ 
	$consulta = "select * from _configuracion where campo='$campo'";
	$json=_mysql($consulta);
	if($json==null){
		return null;
	}else{
		return $json[0]->valor;
	}
}

function ObtenermiIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    return $_SERVER['REMOTE_ADDR'];
}
function GenerarCodigoComparte() {
    return mt_rand(100000,999999);
}

	function get_url() {
	  $parametros = array();
	  $url = parse_url($_SERVER['REQUEST_URI']);
	  foreach(explode("/", $url['path']) as $p)
		if ($p!='') $parametros[] = $p;
	  return $parametros;
	}
	
	function texto_host($url) {
		$parametros = array();
		$url2 = parse_url($url);
		return $url2['host'];
	}
	
	function texto_uri($url,$n) {
		$parametros = array();
		$url2 = parse_url($url);
		foreach(explode("/", $url2['path']) as $p)
			if ($p!='') $parametros[] = $p;
		return $parametros[$n];
	}
	
	function texto_parameters($url,$n) {
		$parametros = array();
		parse_str($url, $url2);
		foreach(explode("&", $url2['/?i']) as $p)
			if ($p!='') $parametros[] = $p;
		return $parametros[$n];
	}
	

	function obtener_url(){
		$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $url;
	}

	function convierte_url_social($url){
		$url="http://".str_replace('/', '%2F',$url);
		return $url;
	}

	function convierte_urlseo($url){
		$url=str_replace('-', ' ',$url);
		return $url;
	}

	function devuelve_urlseo($url){
		$url=str_replace(' ', '-',$url);
		return $url;
	}

	function obtener_dominio(){
		$url="http://".$_SERVER['HTTP_HOST'];
		return $url;
	}

	function palabra_validar($str){
		return preg_match('/^[a-zñÁáÉéÍíÓóÚú\s-]+$/i', $str);
	}
	
	function numeros_espacios_parentesis_mas_validar($str){
		return preg_match('/^[0-9\s()+]+$/', $str);
	}
		
	function fecha_diamesano_validar($str){
		return preg_match('/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/', $str);
	}
	
	function fecha_mayor_edad_validar($fecha_nacimiento) {
		// Convertir la fecha de nacimiento a un objeto DateTime
		$fecha_nacimiento = DateTime::createFromFormat('d/m/Y', $fecha_nacimiento);

		// Fecha actual
		$fecha_actual = new DateTime();

		// Calcula la diferencia entre las fechas
		$diferencia = $fecha_actual->diff($fecha_nacimiento);

		// Verifica si tiene 18 años o más
		if ($diferencia->y >= 18) {
			return true;
		} else {
			return false;
		}
	}
	
	function dni_validar($str){
		return preg_match('/^0*\d{8}$/', $str);
	}
	function ce_validar($str){
		return preg_match('/^\d{1,20}$/', $str);
	}
	function ruc_validar($str){
		return preg_match('/^0*\d{11}$/', $str);
	}
	
	function inyeccion_sql($str){
		return preg_match('/[\';"]/', $str);
	}

	
	function fecha_local(){
		date_default_timezone_set("America/Lima"); 
		$tiempo = getdate(time()); 
		$dia = $tiempo['wday']; 
		$dia_mes=$tiempo['mday']; 
		$mes = $tiempo['mon']; 
		$year = $tiempo['year']; 
		$hora= $tiempo['hours']; 
		$minutos = $tiempo['minutes']; 
		$segundos = $tiempo['seconds']; 
		
		
		switch ($dia){ 
		case "1": $dia_nombre="Lunes"; break; 
		case "2": $dia_nombre="Martes"; break; 
		case "3": $dia_nombre="Mi&eacute;rcoles"; break; 
		case "4": $dia_nombre="Jueves"; break; 
		case "5": $dia_nombre="Viernes"; break; 
		case "6": $dia_nombre="S&aacute;bado"; break; 
		case "0": $dia_nombre="Domingo"; break; 
		} 
		switch($mes){ 
		case "1": $mes_nombre="Enero"; break; 
		case "2": $mes_nombre="Febrero"; break; 
		case "3": $mes_nombre="Marzo"; break; 
		case "4": $mes_nombre="Abril"; break; 
		case "5": $mes_nombre="Mayo"; break; 
		case "6": $mes_nombre="Junio"; break; 
		case "7": $mes_nombre="Julio"; break; 
		case "8": $mes_nombre="Agosto"; break; 
		case "9": $mes_nombre="Septiembre"; break; 
		case "10": $mes_nombre="Octubre"; break; 
		case "11": $mes_nombre="Noviembre"; break; 
		case "12": $mes_nombre="Diciembre"; break; 
		} 
		return $dia_nombre." ".$dia_mes." de ".$mes_nombre." de ".$year; 
	}

	function hora_local(){
		date_default_timezone_set("America/Lima"); 
		$hora = date('h:i a',time() - 3600*date('I')); 
		return $hora;
	}
	
	function url_seo($string){
		$string = str_replace(array('�','�','�','�','�','�'),"a",$string);
		$string = str_replace(array('�','�','�','�','�'),"a",$string);
		$string = str_replace(array('�','�','�','�'),"i",$string);
		$string = str_replace(array('�','�','�','�'),"i",$string);
		$string = str_replace(array('�','�','�','�'),"e",$string);
		$string = str_replace(array('�','�','�','�'),"e",$string);
		$string = str_replace(array('�','�','�','�','�','�'),"o",$string);
		$string = str_replace(array('�','�','�','�','�'),"o",$string);
		$string = str_replace(array('�','�','�','�'),"u",$string);
		$string = str_replace(array('�','�','�','�'),"u",$string);
		$string = str_replace(array('[','^','�','`','�','~',']',':','.',',',';'),"",$string);
		$string = str_replace("�","c",$string);
		$string = str_replace("�","c",$string);
		$string = str_replace("�","n",$string);
		$string = str_replace("�","n",$string);
		$string = str_replace("�","y",$string);
		$string = str_replace("�","y",$string);
		 
		$string = str_replace("&aacute;","a",$string);
		$string = str_replace("&Aacute;","a",$string);
		$string = str_replace("&eacute;","e",$string);
		$string = str_replace("&Eacute;","e",$string);
		$string = str_replace("&iacute;","i",$string);
		$string = str_replace("&Iacute;","i",$string);
		$string = str_replace("&oacute;","o",$string);
		$string = str_replace("&Oacute;","o",$string);
		$string = str_replace("&uacute;","u",$string);
		$string = str_replace("&Uacute;","u",$string);
		$string = str_replace("&Ntilde;","n",$string);
		$string = str_replace("&ntilde;","n",$string);
		
		return $string;
	}

//serializar

	function parametros_procesar($arreglo){
		$data = array();
		foreach ($arreglo as $key => $value) {
			$data[$key] = $value;
		}
		$json_codificado=json_encode($data);
		$json_decodificado=json_decode($json_codificado);
		/*echo "<br>";
		var_dump($json_decodificado);
		echo "<br>";*/
		return $json_decodificado;
	}
	
