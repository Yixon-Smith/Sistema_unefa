<?php
	$nombre = $_POST["nombre"];
	$apePat = $_POST["apepat"];
	$apeMat = $_POST["apemat"];
	$matricula = $_POST["matricula"];
	$telefo = $_POST["telefono"];
	$movil  = $_POST["movil"];
	$direcc = $_POST["direccion"];
	$fecnac = $_POST["fecha"];
	$dni    = $_POST["nrodocume"];
	$email  = $_POST["email"];
	$genero = $_POST["sexo"];
	$tsangre = $_POST["sangre"];

	include '../../modelo/modelo_ciudadano.php';
	$MC = new Modelo_ciuadano();
	$consulta = $MC->Registrar_ciudadano($nombre,$apePat,$apeMat,$matricula,$telefo,$movil,$direcc,$fecnac,$dni,$email,$genero,$tsangre);
	echo $consulta;
?>