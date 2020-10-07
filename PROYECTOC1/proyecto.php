<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viwport" content="width, initial-scale=1.0">
    <title>PH</title>
</head>
<body>
    <?php
    $archivo = array();
    $PH = fopen("datos.txt", "r")
       or die("No se puede abrir el archivo!");
      while (!feof($PH)) {
          array_push($archivo, floatval(fgets($PH)));
    }
    fclose($PH);
$promedio=0;
echo "PH:<br>";
foreach($archivo as $a) {
    $promedio=floatval($a)+$promedio;
    echo $a . "<br>";
}
$promedio=$promedio/sizeof($archivo);
echo "<br>La media(M) fue de: ".round($promedio,2)."<br>";
$G=max($archivo);
$P=min($archivo);
$G=floatval($G);
$P=floatval($P);
echo "El numero mayor es (G): ".$G. "<br>";
echo "El numero menor es (P):".$P. "<br>";

$Grande=$G-$promedio;
echo "G - M = ".round($Grande,2)."<br>";
$Pequeno=$promedio-$P;
echo "P - M = ".round($Pequeno,2)."<br>";

if($Grande > $Pequeno){
  echo "<br>".round($Grande,2)." > ".round($Pequeno,2)." por lo tanto<br>";
  echo "El más alejado es G = ".$G. "<br>";
  $band=$G;
}else{
  echo "<br>".round($Pequeno,2)." > ".round(RGrande,2)." por lo tanto<br>";
  echo "El más alejado es P = ".$P. "<br>";
  $band=$P;
}
echo "<br>Los nuevos pH sin el valor -1 :<br> ";
$NArchivo = array();
$promedioN=0;
foreach ($archivo as $a) {

    if($a != $band){
      array_push($NArchivo, $a);
      $promedioN=floatval($a)+$promedioN;
    }
}
foreach ($NArchivo as $a) {
    echo $a . "<br>";
}
$promedioN=$promedioN/sizeof($NArchivo);
echo "<br>La nueva media es ".round($promedioN,2)

    ?>
</body>
</html>
