<?php
	$cont=0;
	// if ($_FILES["id_archivo"]['tmp_name']!="") {
    // $imagen=uniqid()."-".$_FILES['id_archivo']['name'];
	// $ruta1=$_FILES['id_archivo']['tmp_name'];
	// $destinoImagen='Archivo/'.$imagen;
	// copy($ruta1, $destinoImagen); 
	// $cont=1;
	// }else{  
	// $destinoImagen="";
	// }

	$destinoImagen="invailod";
	$iddocumento= $_POST["iddocumento"];
	$asunto     = strtoupper($_POST["asunto"]);
	// $idtipodocu = $_POST["idtipodocu"];
	// $idarea     = $_POST["idarea"];
	$idremitente= $_POST["idremitente"];
	$idusuario  = $_POST["idusuario"];
	$opcion     = $_POST["opcion"];

	require '../../modelo/modelo_documento.php';
	$MC = new Modelo_documento();
	$data_files_temp = $MC->list_files_temp();
	for ($i=0; $i < count($data_files_temp); $i++) { 
		$add_file = $MC->Add_files_student($iddocumento,$data_files_temp[$i][2],$data_files_temp[$i][3]);
	}
	$consulta = $MC->Registrar_documento($iddocumento,$asunto,$idremitente,$idusuario,$opcion,$destinoImagen,$cont);
	echo $consulta;
?>