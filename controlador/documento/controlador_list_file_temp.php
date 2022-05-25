<?php
	  include '../../modelo/modelo_documento.php';

      $instancia = new Modelo_documento();

      $c = $instancia->list_files_temp();
      echo json_encode($c);
    
?>