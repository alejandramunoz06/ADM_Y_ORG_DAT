<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Territorios</title>
  </head>
  <body>
    <?php
    $nombreArchivo = "territory_names2.csv";
    $archivo = fopen($nombreArchivo, "r") or die("no se puede abrir el archivo: $nombreArchivo");
    $datos =array();

     ?>
     <div class="container">
       <h1 class="titulo"> Territorios del mundo</h1>
       <table class="table">
       <thead class="thead-dark">
         <tr>
           <th>Abrebiatura</th>
           <th>nombre</th>
           <th>nombre oficial</th>
           <th>nombre de ciudades</th>
         </tr>
       

       </thead>
     <tbody>
     <?php
        while (($datos = fgetcsv($archivo, 0, ',', '"', '"'))!== false){
          print("<tr>");
          foreach($datos as $campo){
            print("<td>");
            print("$campo");
            print("</td>");
          }
          print("</tr>");
        }
        ?>
        </tbody>
      </table>
     </div>
     
  </body>
</html>
