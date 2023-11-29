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

  <h2>Medidas de Tendencia Central en Alumnos</h2>


  <div id="media" style="width: 1350px; height: 100px;"></div>
  <div id="mediana" style="width: 1350px; height: 100px;"></div>
  <div id="moda" style="width: 1350px; height: 100px;"></div>



  <script>
   
    var valores = [5,2,5,4,1,6,5,2,2,3];

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
        <h3>Alumnos en general</h3>
        <?php

$texto = "Media: El promedio de los alumnos en general (hombres y mujeres) que asistieron a la biblioteca fue de: 3.5 que se aproxima a 4 alumnos por día.
Mediana: En la primera mitad de los datos el valor más alto es 3.5 y en el resto el valor más bajo es de 3.5 alumnos en general.
Moda: El número de alumnos más frecuente en los datos recolectados fueron 2 y 5.";


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