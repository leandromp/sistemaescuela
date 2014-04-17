<?php 
	if(!isset($vista))
		$vista="";
	include 'cabecera.php';
	switch ($vista) {
		case 'alta':
			include 'alumnos-alta-inc.php';
		break;
		case 'modificacion':
			include 'alumnos-mod-inc.php';
		break;
		default:
			include 'alumnos-inc.php';
			break;
	}
	
	include 'pie.php'
?>