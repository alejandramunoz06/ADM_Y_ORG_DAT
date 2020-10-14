<?php
  $vuelos = array(
   array('id','Origen','Destino','Duración'),
   array('1','New York','London','415'),
   array('2','Shangai','Paris','760'),
   array('3','Istambul','Tokyo','700'),
   array('4','New York','Paris','435'),
   array('5','Moscow','Paris','245'),
   array('6','Lima','New York','455')
  );
$nombrearch = 'vuelos2.csv';
$archivo = fopen($nombrearch, 'w') or die ("no se puede abrir el archivo: $nombrearch");

foreach ($vuelos as $vuelo) {
  $resp = fputcsv($archivo, $vuelo, ',','"', '"');

  if($resp === false){
    die("Error al escribir en csv");
  }
}
fclose($archivo) or die ("no se puede cerrar el archivo: $nombrearch");
echo "<h1> revisa el archivo: $nombrearch </h1>";
 ?>
