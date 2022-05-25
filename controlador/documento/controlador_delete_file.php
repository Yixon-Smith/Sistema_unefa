<?php
include '../../modelo/modelo_documento.php';
$id_files_temp  =  intval($_GET["id"]);
$MC = new Modelo_documento();
$dat = $MC->file_student_temp($id_files_temp);

        If (unlink($dat[0][3])) {
            $consulta = $MC->delete_file($id_files_temp);
        } else {
        // there was a problem deleting the file
        }
    
$data = json_encode($dat);
echo $data
?>