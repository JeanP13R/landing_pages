<?php 

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
function verificaremail($email){ 
  if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
      return FALSE; 
  } else { 
       return TRUE; 
  } 
}


    
    // ----------------------------------------------------------
    // ----------------------------------------------------------
    // ----------------------------------------------------------

	function devuelvetextoconfig($id){
		$bd = Db::getInstance();
		$sql= "select * from m_config where id='$id'";
		$stmt=$bd->ejecutar($sql);
		$x=$bd->obtener_fila($stmt,0);
		return $x['texto'];
	}
	
	function devuelveidconfig($id){
		$bd = Db::getInstance();
		$sql= "select * from m_config where id='$id'";
		$stmt=$bd->ejecutar($sql);
		$x=$bd->obtener_fila($stmt,0);
		return $x['texto'];
	}
	
	function devuelvetextoconfigtitulo($titulo,$idiomaid){
		$bd = Db::getInstance();
		$sql= "select * from m_config where titulo='$titulo' and idiomaid='$idiomaid' and estado=1";
		$stmt=$bd->ejecutar($sql);
		$x=$bd->obtener_fila($stmt,0);
		return $x['texto'];
	}
	
	function devuelveid($tabla){
		$bd = Db::getInstance();
		$sql= "select * from m_tabla where tablnombre='$tabla'";
		$stmt=$bd->ejecutar($sql);
		$x=$bd->obtener_fila($stmt,0);
		return $x['tablcorrelativo'];
	}

	function insertaid($tabla,$id){
		$bd = Db::getInstance();
		$sql= "update m_tabla set tablcorrelativo='$id' where tablnombre='$tabla'";
		$stmt=$bd->ejecutar($sql);
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
	
	
	function uri($n){
		$u = $_SESSION['s_get_url'][$n];
		return $u;
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

	function obtenerid($tabla,$id,$titulo,$value){
		$bd = Db::getInstance();
		$sql= "select $id from $tabla where $titulo='$value'";
		$stmt=$bd->ejecutar($sql);
		$x=$bd->obtener_fila($stmt,0);
		//return $x[1];
		return $x[$id];		
	}
	
	function parseyoutubevid($text,$height,$width){
		//$height=400;
		//$width=620;
		$MatchThis='/[\\?\\&]v=([^\\?\\&]+)/';
		if(preg_match($MatchThis,$text,$matches)){
			if(strlen($vidid=$matches[1]) == 11){
				$youtuvideo="<object width=".$width." height=".$height."><param name=\"movie\" value=\"http://www.youtube.com/v/".$vidid.	"&hl=en&fs=1&rel=0\">
				</param><param name=\"allowFullScreen\" value=\"true\">
				</param><embed src=\"http://www.youtube.com/v/".$vidid."&hl=en&fs=1&rel=0&autoplay=1\"
				type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" width=".$width." height=".$height."></embed></object>";
				return $youtuvideo;
			}else{
				return $text;// no paso el text de el ID de youtube..
			}
		  }else{
			  return $text;// retornamos el texto pues no es un video youtube.
		}
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

	function mail_contacto($asunto,$nombre,$email,$telefono,$mensaje,$emailpost){
		$cuerpo = ' 
			<html> 
			<head> 
			   <title>Contacto - The Style Institute</title> 
			</head> 
			<body>
			<table width="100%" align="center">
			<tr align="center">
			<td bgcolor="#fff">
			<table align="center" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr align="center">
			<td height="16"></td>
			</tr>
			<tr>
			<td width="596">
			<table width="596" align="center" valign="top" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
			<td width="9"></td>
			<td width="230" height="47" align="left" valign="center">
			</td>
			<td  align="center" valign="center">
			<img src="http://www.thestyleinstitute.pe/tsi-uno_files/logo.png">
			</td>
			<td width="230" height="47" align="right" valign="center">
			</td>
			<td width="9"></td>
			</tr>
			</tbody></table>
			</td>
			</tr>
			<tr>
			<td height="16"></td>
			</tr>
			<tr>
			<td width="596" align="left" bgcolor="#FFFFFF">
			<div style="border-style:solid;border-width:1px;border-color:#cccccc">
			<table width="596" align="center" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
			<td height="22" colspan="3"></td>
			</tr>
			<tr>
			<td width="40"></td>
			<td width="516">
			<table width="516" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
			<td>
			<div style="font-family:arial,Arial,sans-serif;font-size:18px;line-height:24px;color:#333333">
			  <p><b>'.$nombre.'</b>, escribi&oacute; un mensaje el '.fecha_local().' a las '.hora_local().'.</p>			  
			  <p>Asunto: '.$asunto.'</p>
			  <p>Escribi&oacute;: '.$mensaje.'</p>
			  <p>N&uacute;mero es: '.$telefono.'</p>
			  <p>Su direccion e-mail es: '.$email.'</p>
			</div>
			</td>
			</tr>
			</tbody></table>
			<div style="border-bottom:1px solid #e1e1e1"></div>
			<table height="0" cellspacing="0" cellpadding="0" border="0">
			  <tbody><tr>
			  <td height="0"></td>
			  </tr>
			</tbody></table>
			<table height="0" cellspacing="0" cellpadding="0" border="0">
			  <tbody><tr>
				<td height="0"></td>
				</tr>
			</tbody></table></td>
			<td width="40"></td>
			</tr>
			<tr>
			<td height="22" colspan="3"></td>
			</tr>
			</tbody></table>
			</div>
			</td>
			</tr>
			<tr>
			<td width="596">
			<table width="596" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
			<td width="556">
			<div style="color:#999999;font-size:11px;line-height:14px;font-family:arial,Arial,sans-serif">
			�2014 TheStyleInstitute.pe</div>
			</td>
			</tr>
			</tbody></table>
			</td>
			</tr>
			</tbody></table>
			</td>
			</tr>
			</table>
			</body>
			</html>
			';
			
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "From: The Style Institute Website <informes@thestyleinstitute.pe>\r\n";
			mail($emailpost,$asunto,$cuerpo,$headers);
			//mail('a@a.com',$asunto,$cuerpo,$headers);
			crea_envio($asunto,$cuerpo);
			//mail('a@a.com','Contacto',$cuerpo,$headers);
			//echo "Env�o con �xito";
	}

	function mail_academico($academico,$nombre,$email,$telefono,$mensaje,$emailpost){
		$cuerpo = ' 
			<html> 
			<head> 
			   <title>'.$academico.' - The Style Institute</title> 
			</head> 
			<body>
			<table width="100%" align="center">
			<tr align="center">
			<td bgcolor="#fff">
			<table align="center" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr align="center">
			<td height="16"></td>
			</tr>
			<tr>
			<td width="596">
			<table width="596" align="center" valign="top" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
			<td width="9"></td>
			<td width="230" height="47" align="left" valign="center">
			</td>
			<td  align="center" valign="center">
			<img src="http://www.thestyleinstitute.pe/tsi-uno_files/logo.png">
			</td>
			<td width="230" height="47" align="right" valign="center">
			</td>
			<td width="9"></td>
			</tr>
			</tbody></table>
			</td>
			</tr>
			<tr>
			<td height="16"></td>
			</tr>
			<tr>
			<td width="596" align="left" bgcolor="#FFFFFF">
			<div style="border-style:solid;border-width:1px;border-color:#cccccc">
			<table width="596" align="center" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
			<td height="22" colspan="3"></td>
			</tr>
			<tr>
			<td width="40"></td>
			<td width="516">
			<table width="516" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
			<td>
			<div style="font-family:arial,Arial,sans-serif;font-size:18px;line-height:24px;color:#333333">
			  <p><b>'.$nombre.'</b>, escribi&oacute; un mensaje el '.fecha_local().' a las '.hora_local().'.</p>			  
			  <p>Asunto: '.$academico.'</p>
			  <p>Escribi&oacute;: '.$mensaje.'</p>
			  <p>N&uacute;mero es: '.$telefono.'</p>
			  <p>Su direccion e-mail es: '.$email.'</p>
			</div>
			</td>
			</tr>
			</tbody></table>
			<div style="border-bottom:1px solid #e1e1e1"></div>
			<table height="0" cellspacing="0" cellpadding="0" border="0">
			  <tbody><tr>
			  <td height="0"></td>
			  </tr>
			</tbody></table>
			<table height="0" cellspacing="0" cellpadding="0" border="0">
			  <tbody><tr>
				<td height="0"></td>
				</tr>
			</tbody></table></td>
			<td width="40"></td>
			</tr>
			<tr>
			<td height="22" colspan="3"></td>
			</tr>
			</tbody></table>
			</div>
			</td>
			</tr>
			<tr>
			<td width="596">
			<table width="596" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
			<td width="556">
			<div style="color:#999999;font-size:11px;line-height:14px;font-family:arial,Arial,sans-serif">
			�2014 TheStyleInstitute.pe</div>
			</td>
			</tr>
			</tbody></table>
			</td>
			</tr>
			</tbody></table>
			</td>
			</tr>
			</table>
			</body>
			</html>
			'; 
			
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "From: The Style Institute Website <informes@thestyleinstitute.pe>\r\n";
			
			mail($emailpost,$academico,$cuerpo,$headers);
			crea_envio($academico,$cuerpo);
			//mail('etomasto@calzadospiale.com','Contacto',$cuerpo,$headers);
			//echo "Env�o con �xito";
	}
	
	
//////////////FORMULARIOS//////////////////////	


///////////////////////////////////////
	function mostrar_idioma_predeterminado(){
		if(!isset($_SESSION['ca_idiomaid'])){	
			$bd = Db::getInstance();
			$sql="select * from m_idioma where defecto='1'";		
			$stmt=$bd->ejecutar($sql);		
			if(@mysql_num_rows($stmt) > 0){ 
				$x=$bd->obtener_fila($stmt,0);	
				$_SESSION['ca_idiomaid']=$x['idiomaid'];
				$_SESSION['ca_idioma']=$x['titulo'];
				$_SESSION['ca_idiomaprefijo']=$x['prefijo'];
			}
		}
	}		
///////////////////////////////////////
	
	function obtenermenu($idiomaid,$tipo){
		$bd = Db::getInstance();
		$sql= "select urlseo from t_menus where idiomaid='$idiomaid' and categoria='$tipo'";
		$stmt=$bd->ejecutar($sql);
		$x=$bd->obtener_fila($stmt,0);
		//return $x[1];
		return $x['urlseo'];		
	}
	
	function obtenermenuname($idiomaid,$tipo){
		$bd = Db::getInstance();
		$sql= "select titulo from t_menus where idiomaid='$idiomaid' and categoria='$tipo'";
		$stmt=$bd->ejecutar($sql);
		$x=$bd->obtener_fila($stmt,0);
		//return $x[1];
		return $x['titulo'];		
	}
	
	function obtenerservicio($idiomaid,$urlseo){
		$bd = Db::getInstance();
		$sql= "select 
				* 
				from t_paginas 
				where idiomaid='$idiomaid'
				and urlseo='$urlseo'
				and tipo=2
				and estado=1
				order by orden";
		$stmt=$bd->ejecutar($sql);
		$x=$bd->obtener_fila($stmt,0);
		//return $x[1];
		return $x['titulo'];		
	}
			
	
	function mostrar_menu_servicios($idiomaid){
		$bd = Db::getInstance();
		$sql="	select 
				paginaid, titulo  
				from t_paginas 
				where tipo=2
				and idiomaid='$idiomaid'";
		
		$stmt=$bd->ejecutar($sql);
		$i=1;
		if(@mysql_num_rows($stmt) == 0){ 
			echo "";
		}else{
			echo '<ul>';
			while ($x=$bd->obtener_fila($stmt,0)){
				echo '<li><a href="'.($idiomaid='1001' ? "servicio" : "service").'/'.$x['urlseo'].'">'.$x['titulo'].'</a></li>';
				$i++;
			}
			echo '</ul>'; 
		} 
	}
	
	

	function error(){
        echo "<!-- Title Section -->";
        echo "<section class='title-section'>";
            echo "<div class='container'>";
                echo "<!-- crumbs --> ";
                echo "<div class='row crumbs'>";
                   echo "<div class='span12'>";
                        echo "<a href='./'>Inicio</a> / Error 404";
                   echo "</div>";
                echo "</div>";
                echo "<!-- End crumbs --> ";
                echo "<!-- Title - Search--> ";
                echo "<div class='row title'>";
                    echo "<!-- Title --> ";
                    echo "<div class='span9'>";
                        echo "<h1>404 - Página no encontrada";
                            echo "<span class='line-title'></span>";
                        echo "</h1>";
                    echo "</div>";
                    echo "<!-- End Title--> ";
                echo "</div>";
                echo "<!-- End Title -Search -->              ";
            echo "</div>";
        echo "</section>   ";
        echo "<!-- End Title Section -->";
        echo "<!-- Works -->";
        echo "<section class='paddings'>";
            echo "<div class='container'>              ";
                echo "<div class='row page-error'>  ";
                    echo "<h1>404 <i class='fa fa-unlink'></i></h1>";
                     echo "<hr class='tall'>";
                    echo "<p class='lead'>Lo sentimos, la página no se encontró en nuestros servidores.</p>";
                    echo "<a href='./' class='btn btn-lg btn-primary'>Volver a inicio</a>               ";     
                echo "</div>           ";
            echo "</div>";
            echo "<!-- End Container-->";
        echo "</section>";
        echo "<!-- End Works-->";
	}
	
?>
