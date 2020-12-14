<?php
$fila = 1;
$num0 = 0;
$num1 = 0;
$num2 = 0;
$num3 = 0;
$num4 = 0;
$num5 = 0;
if (($gestor = fopen("datosCrudos.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $numero = count($datos);
        $fila++;
        for ($c=0; $c < $numero; $c++) {
            if ($datos[$c]=="0"){
              $num0++;
            }elseif ($datos[$c]=="1"){
              $num1++;
            }elseif ($datos[$c]=="2"){
              $num2++;
            }elseif ($datos[$c]=="3"){
              $num3++;
            }elseif ($datos[$c]=="4"){
              $num4++;
            }elseif ($datos[$c]=="5"){
              $num5++;
            }
        }
    }
    fclose($gestor);
}
 ?>
 <DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="chartist.min.css">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="boostrap.min">
  <script src="chartist.min.js"></script>
</head>

<body>
  <h1 style="text-align:center; color:black;">CENSO DE TELEVISION</h1>
  <br>
   <h1 style="text-align:center; color: black;">GRAFICO DE BARRAS</h1>
 <div class="ct-chart ct-octave"></div>
 <h1 style="text-align:center; color: black;">GRAFICO DE LINEAS</h1>
 <div class="ct-chartline ct-neptune"></div> <br>
 <br>
 <h1 style="text-align:center; color: black;">GRAFICO DE PASTEL</h1>
 <br><br>
<div class="ct-chartpie ct-octave"></div>


   <script>
   new Chartist.Bar('.ct-chart', {
labels: ['0 TV', '1 TV', '2 TV', '3 TV', '4 TV', '5 TV'],
series: [
[  <?php echo $num0; ?>,  <?php echo $num1; ?>,   <?php echo $num2; ?>,  <?php echo $num3; ?>,  <?php echo $num4; ?>,  <?php echo $num5; ?>],

]
}, {
 stackBars: true,
 seriesBarDistance: 10,
 reverseData: true,
 horizontalBars: true,
 axisY: {
   offset: 70
 }

}).on('draw', function(data) {
if(data.type === 'bar') {
data.element.attr({
style: 'stroke-width: 30px'
});
}
});
new Chartist.Line('.ct-chartline', {
  labels: ['0 TV', '1 TV', '2 TV', '3 TV', '4 TV', '5 TV'],
  series: [
    [  <?php echo $num0; ?>,  <?php echo $num1; ?>,   <?php echo $num2; ?>,  <?php echo $num3; ?>,  <?php echo $num4; ?>,  <?php echo $num5; ?>],
  ]
}, {
  fullWidth: true,
  chartPadding: {
    right: 40
  }
});
var data = {
  labels: ['0 TV', '1 TV', '2 TV', '3 TV', '4 TV', '5 TV'],
  series: [  <?php echo $num0; ?>,  <?php echo $num1; ?>,   <?php echo $num2; ?>,  <?php echo $num3; ?>,  <?php echo $num4; ?>,  <?php echo $num5; ?>],
};

var options = {
  labelInterpolationFnc: function(value) {
    return value[0]
  }
};

var responsiveOptions = [
  ['screen and (min-width: 540px)', {
    chartPadding: 30,
    labelOffset: 100,
    labelDirection: 'explode',
    labelInterpolationFnc: function(value) {
      return value;
    }
  }],
  ['screen and (min-width: 640px)', {
    labelOffset: 280,
    chartPadding: 20
  }]
];

new Chartist.Pie('.ct-chartpie', data, options, responsiveOptions);
</script>
<div></div>

</body>

</html>
