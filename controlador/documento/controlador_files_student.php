<?php
    require '../../modelo/modelo_documento.php';
    $MC = new Modelo_documento();
for ($i=0; $i < count($_FILES['files']['name']); $i++) { 
    $file_name=uniqid()."-".$_FILES['files']['name'][$i];
    $name_f=$_FILES['files']['name'][$i];
    $pach=$_FILES['files']['tmp_name'][$i];
    $destino_files='Archivo/'.$file_name;
    move_uploaded_file($pach, $destino_files);        
    $consulta = $MC->store_files($name_f,$destino_files);

}

$data = json_encode($destino_files);
?>