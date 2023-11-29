<?php  include('head.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>Medidas de Tendencia Central con Highcharts</title>
  <!-- Agregar los enlaces a las bibliotecas de Highcharts -->
  <script src="code/highcharts.js"></script>
  <script src="code/modules/exporting.js"></script>
  <script src="code/modules/export-data.js"></script>
</head>
<body>

  <h2>Medidas de Tendencia Central en Personal</h2>

  <!-- Contenedores para los gráficos -->
  <div id="media" style="width: 1350px; height: 100px;"></div>
  <div id="mediana" style="width: 1350px; height: 100px;"></div>
  <div id="moda" style="width: 1350px; height: 100px;"></div>

  <script>
    // Valores predefinidos para calcular
    var valores = [2,3,2,2,2,3,3,2,3,2];

    function calcular() {
      // Utilizar los valores predefinidos
      var numeros = valores;
      
      // Calcular la media
      var suma = numeros.reduce(function(a, b) {
        return a + b;
      }, 0);
      var media = suma / numeros.length;

      // Calcular la mediana
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

      // Calcular la moda
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

      // Mostrar los resultados en gráficos con Highcharts
      mostrarGrafico('media', 'Media', media);
      mostrarGrafico('mediana', 'Mediana', mediana);
      mostrarGrafico('moda', 'Moda', moda.join(', ')); // Convertir a cadena para visualización
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
          data: [parseFloat(valor)] // Mostrar el valor en un gráfico de columnas
        }]
      });
    }

    // Calcular automáticamente al cargar la página
    calcular();
  </script>

<div class="container">
        <h3>Personal</h3>
        <?php

$texto = "Media: El promedio de personal que estaban a la biblioteca fue de: 2.4 que se aproxima a 3 personas por día.
Mediana: En la primera mitad de los datos el valor más alto es 2 y en el resto el valor más bajo es de 2 personas.
Moda: El número de personal más frecuente en los datos recolectados fue de 2 personas.";


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