<?php 
require_once('__capa_negocio_datos.php');
require_once('__capa_negocio_funciones.php');
if (islocalhost()){
	$carpetas_profundidad=0;
}else{
	$carpetas_profundidad=0;
}	
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha=fecha_obtener('huso'); 
$ipregistro=ip_obtener();
$uri=uri($carpetas_profundidad);
$uri_paginas=uri_paginas($carpetas_profundidad);
$i=1;$pag="";$spag="";$sspag="";$ssspag="";$sssspag="";$test="";
foreach(explode('/',$uri_paginas) as $arreglo){
	if ($arreglo<>""){
		switch ($i){
			case 1: $pag = $arreglo; break;
			case 2: $spag = $arreglo; break;
			case 3: $sspag = $arreglo; break;
			case 4: $ssspag = $arreglo; break;
			case 5: $sssspag = $arreglo; break;
		}
		$test=$test.$arreglo;
	}
	$i++;
}

// Obtener el protocolo, el dominio y el puerto actual
$protocolo = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$dominio = $_SERVER['HTTP_HOST'];
$puerto = $_SERVER['SERVER_PORT'];

// Verificar si se utiliza un puerto diferente de los estándares (80 para http y 443 para https)
if (($protocolo == "http" && $puerto != "80") || ($protocolo == "https" && $puerto != "443")) {
	$dominio .= ":" . $puerto;
}

if(isset($_GET['t1'])){
	?>
	<!DOCTYPE html>
	<html lang="es" dir="ltr">
	<head>
	<?php require_once('__capa_presentacion_arriba_meta.php'); ?>
	</head>
	<body>
	<?php require_once('__capa_presentacion_arriba.php'); ?>
	<?php
		require_once(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$uri.'_'.$pag.'.php')?'_'.$pag.'.php':'_404.php');
		pagina($pag,$spag,$sspag,$ssspag,$sssspag);	
	?>
	<?php require_once('__capa_presentacion_abajo.php'); ?>
	</body>
	<?php require_once('__capa_presentacion_abajo_meta.php'); ?>
	</html>
	<?php
} elseif(isset($_GET['t2'])) {
		require_once(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$uri.'_'.$pag.'.php')?'_'.$pag.'.php':'_404.php');
		pagina($pag,$spag,$sspag,$ssspag,$sssspag);	
} else {
	?>
	<!DOCTYPE html>
	<html lang="es" dir="ltr">
	<head>
	<?php require_once('__capa_presentacion_arriba_meta.php'); ?>
	</head>
	<body>
	<?php require_once('__capa_presentacion_arriba.php'); ?>
	<?php
		require_once(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$uri.'_'.$pag.'.php')?'_'.$pag.'.php':'_404.php');
		pagina($pag,$spag,$sspag,$ssspag,$sssspag);	
	?>
	<?php require_once('__capa_presentacion_abajo.php'); ?>
	</body>
	<?php require_once('__capa_presentacion_abajo_meta.php'); ?>
	</html>
	<?php
}
