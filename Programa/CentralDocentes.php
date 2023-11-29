<?php  include('head.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>Medidas de Tendencia Central con Highcharts</title>

  <script src="code/highcharts.js"></script>
  <script src="code/modules/exporting.js"></script>
  <script src="code/modules/export-data.js"></script>
</head>
<body>

  <h2>Medidas de Tendencia Central en Docentes</h2>

  
  <div id="media" style="width: 1350px; height: 100px;"></div>
  <div id="mediana" style="width: 1350px; height: 100px;"></div>
  <div id="moda" style="width: 1350px; height: 100px;"></div>

  <script>
    
    var valores = [0,5,2,4,3,0,1,0,4,2];

    function calcular() {
      
      var numeros = valores;
      
    
      var suma = numeros.reduce(function(a, b) {
        return a + b;
      }, 0);
      var media = suma / numeros.length;

      
      numeros.sort(function(a, b) {
        return a - b;
      });
      var mediana;
      if (numeros.length % 2 === 0) {
        var mid = numeros.length / 2;
        mediana = (numeros[mid - 1] + numeros[mid]) / 2;
      } else {
        mediana = numeros[Math.floor(numeros.length / 2)];
      }

      
      var frecuencia = {};
      var moda = [];
      numeros.forEach(function(numero) {
        frecuencia[numero] = (frecuencia[numero] || 0) + 1;
      });
      var maxFrecuencia = Math.max(...Object.values(frecuencia));
      for (var key in frecuencia) {
        if (frecuencia[key] === maxFrecuencia) {
          moda.push(parseFloat(key));
        }
      }

      
      mostrarGrafico('media', 'Media', media);
      mostrarGrafico('mediana', 'Mediana', mediana);
      mostrarGrafico('moda', 'Moda', moda.join(', ')); 
    }

    function mostrarGrafico(contenedor, nombre, valor) {
      Highcharts.chart(contenedor, {
        chart: {
          type: 'column'
        },
        title: {
          text: nombre + ': ' + valor
        },
        series: [{
          data: [parseFloat(valor)] 
        }]
      });
    }

   
    calcular();
  </script>

<div class="container">
        <h3>Docentes</h3>
        <?php

$texto = "Media: El promedio de los docentes que asistieron a la biblioteca fue de: 2.1 que se aproxima a 2 docentes por día.
Mediana: En la primera mitad de los datos el valor más alto es 2 y en el resto el valor más bajo es de 2 docentes.
Moda: En el número de docentes no se encontraron datos con mayor frecuencia";


$lineas = explode("\n", $texto);


echo "<ul>";
foreach ($lineas as $linea) {
    echo "<li>$linea</li>";
}
echo "</ul>";

?>

</body>
</html>
<?php  include('footer.php')?>